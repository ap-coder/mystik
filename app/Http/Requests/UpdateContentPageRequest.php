<?php

namespace App\Http\Requests;

use App\Models\ContentPage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContentPageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('content_page_edit');
    }

    public function rules()
    {
        return [
            'title'        => [
                'string',
                'required',
                'unique:content_pages,title,' . request()->route('content_page')->id,
            ],
            'categories.*' => [
                'integer',
            ],
            'categories'   => [
                'array',
            ],
            'tags.*'       => [
                'integer',
            ],
            'tags'         => [
                'array',
            ],
            'slug'         => [
                'string',
                'required',
                'unique:content_pages,slug,' . request()->route('content_page')->id,
            ],
        ];
    }
}
