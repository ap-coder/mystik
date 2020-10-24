<?php

namespace App\Http\Requests;

use App\Models\ProductReview;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductReviewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_review_edit');
    }

    public function rules()
    {
        return [
            'title'             => [
                'string',
                'nullable',
            ],
            'rating'            => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'website'           => [
                'string',
                'nullable',
            ],
            'signiture'         => [
                'string',
                'nullable',
            ],
            'signiture_company' => [
                'string',
                'nullable',
            ],
        ];
    }
}
