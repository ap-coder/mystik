<?php

namespace App\Http\Requests;

use App\Models\Location;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLocationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('location_create');
    }

    public function rules()
    {
        return [
            'nickname'  => [
                'string',
                'nullable',
            ],
            'address'   => [
                'string',
                'nullable',
            ],
            'address_2' => [
                'string',
                'nullable',
            ],
            'city'      => [
                'string',
                'nullable',
            ],
            'state'     => [
                'string',
                'nullable',
            ],
            'zip'       => [
                'string',
                'nullable',
            ],
        ];
    }
}
