<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreFaqQuestionRequest;
use App\Http\Requests\UpdateFaqQuestionRequest;
use App\Http\Resources\Admin\FaqQuestionResource;
use App\Models\FaqQuestion;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FaqQuestionApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('faq_question_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FaqQuestionResource(FaqQuestion::with(['category'])->get());
    }

    public function store(StoreFaqQuestionRequest $request)
    {
        $faqQuestion = FaqQuestion::create($request->all());

        if ($request->input('attachments', false)) {
            $faqQuestion->addMedia(storage_path('tmp/uploads/' . $request->input('attachments')))->toMediaCollection('attachments');
        }

        if ($request->input('photo', false)) {
            $faqQuestion->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return (new FaqQuestionResource($faqQuestion))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FaqQuestion $faqQuestion)
    {
        abort_if(Gate::denies('faq_question_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FaqQuestionResource($faqQuestion->load(['category']));
    }

    public function update(UpdateFaqQuestionRequest $request, FaqQuestion $faqQuestion)
    {
        $faqQuestion->update($request->all());

        if ($request->input('attachments', false)) {
            if (!$faqQuestion->attachments || $request->input('attachments') !== $faqQuestion->attachments->file_name) {
                if ($faqQuestion->attachments) {
                    $faqQuestion->attachments->delete();
                }

                $faqQuestion->addMedia(storage_path('tmp/uploads/' . $request->input('attachments')))->toMediaCollection('attachments');
            }
        } elseif ($faqQuestion->attachments) {
            $faqQuestion->attachments->delete();
        }

        if ($request->input('photo', false)) {
            if (!$faqQuestion->photo || $request->input('photo') !== $faqQuestion->photo->file_name) {
                if ($faqQuestion->photo) {
                    $faqQuestion->photo->delete();
                }

                $faqQuestion->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($faqQuestion->photo) {
            $faqQuestion->photo->delete();
        }

        return (new FaqQuestionResource($faqQuestion))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FaqQuestion $faqQuestion)
    {
        abort_if(Gate::denies('faq_question_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $faqQuestion->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
