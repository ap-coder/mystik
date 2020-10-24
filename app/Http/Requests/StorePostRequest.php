<?php

namespace App\Http\Requests;

use App\Models\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('post_create');
    }

    public function rules()
    {
        return [
            'title'         => [
                'string',
                'required',
                'unique:posts',
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
            'products.*'    => [
                'integer',
            ],
            'products'      => [
                'array',
            ],
            'faqs.*'        => [
                'integer',
            ],
            'faqs'          => [
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
                'unique:posts',
            ],
        ];
    }
}
