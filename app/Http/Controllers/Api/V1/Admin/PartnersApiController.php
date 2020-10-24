<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Http\Resources\Admin\PartnerResource;
use App\Models\Partner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartnersApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('partner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartnerResource(Partner::with(['products'])->get());
    }

    public function store(StorePartnerRequest $request)
    {
        $partner = Partner::create($request->all());
        $partner->products()->sync($request->input('products', []));

        if ($request->input('logo', false)) {
            $partner->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        if ($request->input('attachments', false)) {
            $partner->addMedia(storage_path('tmp/uploads/' . $request->input('attachments')))->toMediaCollection('attachments');
        }

        if ($request->input('additional_images', false)) {
            $partner->addMedia(storage_path('tmp/uploads/' . $request->input('additional_images')))->toMediaCollection('additional_images');
        }

        return (new PartnerResource($partner))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Partner $partner)
    {
        abort_if(Gate::denies('partner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartnerResource($partner->load(['products']));
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

        if ($request->input('attachments', false)) {
            if (!$partner->attachments || $request->input('attachments') !== $partner->attachments->file_name) {
                if ($partner->attachments) {
                    $partner->attachments->delete();
                }

                $partner->addMedia(storage_path('tmp/uploads/' . $request->input('attachments')))->toMediaCollection('attachments');
            }
        } elseif ($partner->attachments) {
            $partner->attachments->delete();
        }

        if ($request->input('additional_images', false)) {
            if (!$partner->additional_images || $request->input('additional_images') !== $partner->additional_images->file_name) {
                if ($partner->additional_images) {
                    $partner->additional_images->delete();
                }

                $partner->addMedia(storage_path('tmp/uploads/' . $request->input('additional_images')))->toMediaCollection('additional_images');
            }
        } elseif ($partner->additional_images) {
            $partner->additional_images->delete();
        }

        return (new PartnerResource($partner))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Partner $partner)
    {
        abort_if(Gate::denies('partner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partner->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
