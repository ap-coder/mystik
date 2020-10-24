<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPartnerRequest;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PartnersController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('partner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partners = Partner::all();

        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        abort_if(Gate::denies('partner_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all()->pluck('name', 'id');

        return view('admin.partners.create', compact('products'));
    }

    public function store(StorePartnerRequest $request)
    {
        $partner = Partner::create($request->all());
        $partner->products()->sync($request->input('products', []));

        if ($request->input('logo', false)) {
            $partner->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        foreach ($request->input('attachments', []) as $file) {
            $partner->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
        }

        foreach ($request->input('additional_images', []) as $file) {
            $partner->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('additional_images');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $partner->id]);
        }

        return redirect()->route('admin.partners.index');
    }

    public function edit(Partner $partner)
    {
        abort_if(Gate::denies('partner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all()->pluck('name', 'id');

        $partner->load('products');

        return view('admin.partners.edit', compact('products', 'partner'));
    }

    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        $partner->update($request->all());
        $partner->products()->sync($request->input('products', []));

        if ($request->input('logo', false)) {
            if (!$partner->logo || $request->input('logo') !== $partner->logo->file_name) {
                if ($partner->logo) {
                    $partner->logo->delete();
                }

                $partner->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($partner->logo) {
            $partner->logo->delete();
        }

        if (count($partner->attachments) > 0) {
            foreach ($partner->attachments as $media) {
                if (!in_array($media->file_name, $request->input('attachments', []))) {
                    $media->delete();
                }
            }
        }

        $media = $partner->attachments->pluck('file_name')->toArray();

        foreach ($request->input('attachments', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $partner->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
            }
        }

        if (count($partner->additional_images) > 0) {
            foreach ($partner->additional_images as $media) {
                if (!in_array($media->file_name, $request->input('additional_images', []))) {
                    $media->delete();
                }
            }
        }

        $media = $partner->additional_images->pluck('file_name')->toArray();

        foreach ($request->input('additional_images', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $partner->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('additional_images');
            }
        }

        return redirect()->route('admin.partners.index');
    }

    public function show(Partner $partner)
    {
        abort_if(Gate::denies('partner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partner->load('products');

        return view('admin.partners.show', compact('partner'));
    }

    public function destroy(Partner $partner)
    {
        abort_if(Gate::denies('partner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partner->delete();

        return back();
    }

    public function massDestroy(MassDestroyPartnerRequest $request)
    {
        Partner::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('partner_create') && Gate::denies('partner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Partner();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
