@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.productReview.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-reviews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.id') }}
                        </th>
                        <td>
                            {{ $productReview->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $productReview->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.title') }}
                        </th>
                        <td>
                            {{ $productReview->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.rating') }}
                        </th>
                        <td>
                            {{ $productReview->rating }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.product') }}
                        </th>
                        <td>
                            {{ $productReview->product->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.body') }}
                        </th>
                        <td>
                            {{ $productReview->body }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.website') }}
                        </th>
                        <td>
                            {{ $productReview->website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.signiture') }}
                        </th>
                        <td>
                            {{ $productReview->signiture }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productReview.fields.signiture_company') }}
                        </th>
                        <td>
                            {{ $productReview->signiture_company }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-reviews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection