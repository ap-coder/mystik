<?php

namespace App\Http\Requests;

use App\Models\Discussion;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDiscussionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('discussion_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'slug'  => [
                'string',
                'nullable',
            ],
        ];
    }
}
