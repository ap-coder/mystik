<?php

namespace App\Http\Requests;

use App\Models\Partner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePartnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('partner_create');
    }

    public function rules()
    {
        return [
            'name'       => [
                'string',
                'nullable',
            ],
            'order'      => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'url'        => [
                'string',
                'nullable',
            ],
            'products.*' => [
                'integer',
            ],
            'products'   => [
                'array',
            ],
            'slug'       => [
                'string',
                'nullable',
            ],
        ];
    }
}
