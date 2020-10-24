<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_create');
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'required',
                'unique:products',
            ],
            'categories.*'  => [
                'integer',
            ],
            'categories'    => [
                'array',
            ],
            'tags.*'        => [
                'integer',
            ],
            'tags'          => [
                'array',
            ],
            'meta_title'    => [
                'string',
                'nullable',
            ],
            'meta_desc'     => [
                'string',
                'nullable',
            ],
            'fb_title'      => [
                'string',
                'nullable',
            ],
            'twitter_title' => [
                'string',
                'nullable',
            ],
            'slug'          => [
                'string',
                'required',
                'unique:products',
            ],
        ];
    }
}
