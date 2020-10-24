<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDiscussionRequest;
use App\Http\Requests\StoreDiscussionRequest;
use App\Http\Requests\UpdateDiscussionRequest;
use App\Models\Discussion;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DiscussionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('discussion_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $discussions = Discussion::all();

        return view('admin.discussions.index', compact('discussions'));
    }

    public function create()
    {
        abort_if(Gate::denies('discussion_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.discussions.create', compact('users'));
    }

    public function store(StoreDiscussionRequest $request)
    {
        $discussion = Discussion::create($request->all());

        if ($request->input('header_image', false)) {
            $discussion->addMedia(storage_path('tmp/uploads/' . $request->input('header_image')))->toMediaCollection('header_image');
        }

        foreach ($request->input('attachments', []) as $file) {
            $discussion->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $discussion->id]);
        }

        return redirect()->route('admin.discussions.index');
    }

    public function edit(Discussion $discussion)
    {
        abort_if(Gate::denies('discussion_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $discussion->load('user');

        return view('admin.discussions.edit', compact('users', 'discussion'));
    }

    public function update(UpdateDiscussionRequest $request, Discussion $discussion)
    {
        $discussion->update($request->all());

        if ($request->input('header_image', false)) {
            if (!$discussion->header_image || $request->input('header_image') !== $discussion->header_image->file_name) {
                if ($discussion->header_image) {
                    $discussion->header_image->delete();
                }

                $discussion->addMedia(storage_path('tmp/uploads/' . $request->input('header_image')))->toMediaCollection('header_image');
            }
        } elseif ($discussion->header_image) {
            $discussion->header_image->delete();
        }

        if (count($discussion->attachments) > 0) {
            foreach ($discussion->attachments as $media) {
                if (!in_array($media->file_name, $request->input('attachments', []))) {
                    $media->delete();
                }
            }
        }

        $media = $discussion->attachments->pluck('file_name')->toArray();

        foreach ($request->input('attachments', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $discussion->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
            }
        }

        return redirect()->route('admin.discussions.index');
    }

    public function show(Discussion $discussion)
    {
        abort_if(Gate::denies('discussion_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $discussion->load('user');

        return view('admin.discussions.show', compact('discussion'));
    }

    public function destroy(Discussion $discussion)
    {
        abort_if(Gate::denies('discussion_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $discussion->delete();

        return back();
    }

    public function massDestroy(MassDestroyDiscussionRequest $request)
    {
        Discussion::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('discussion_create') && Gate::denies('discussion_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Discussion();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
