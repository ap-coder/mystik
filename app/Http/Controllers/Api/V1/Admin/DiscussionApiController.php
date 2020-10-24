<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreDiscussionRequest;
use App\Http\Requests\UpdateDiscussionRequest;
use App\Http\Resources\Admin\DiscussionResource;
use App\Models\Discussion;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DiscussionApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('discussion_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DiscussionResource(Discussion::with(['user'])->get());
    }

    public function store(StoreDiscussionRequest $request)
    {
        $discussion = Discussion::create($request->all());

        if ($request->input('header_image', false)) {
            $discussion->addMedia(storage_path('tmp/uploads/' . $request->input('header_image')))->toMediaCollection('header_image');
        }

        if ($request->input('attachments', false)) {
            $discussion->addMedia(storage_path('tmp/uploads/' . $request->input('attachments')))->toMediaCollection('attachments');
        }

        return (new DiscussionResource($discussion))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Discussion $discussion)
    {
        abort_if(Gate::denies('discussion_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DiscussionResource($discussion->load(['user']));
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

        if ($request->input('attachments', false)) {
            if (!$discussion->attachments || $request->input('attachments') !== $discussion->attachments->file_name) {
                if ($discussion->attachments) {
                    $discussion->attachments->delete();
                }

                $discussion->addMedia(storage_path('tmp/uploads/' . $request->input('attachments')))->toMediaCollection('attachments');
            }
        } elseif ($discussion->attachments) {
            $discussion->attachments->delete();
        }

        return (new DiscussionResource($discussion))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Discussion $discussion)
    {
        abort_if(Gate::denies('discussion_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $discussion->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
