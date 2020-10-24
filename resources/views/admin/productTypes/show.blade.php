@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.productType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.productType.fields.id') }}
                        </th>
                        <td>
                            {{ $productType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productType.fields.name') }}
                        </th>
                        <td>
                            {{ $productType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productType.fields.slug') }}
                        </th>
                        <td>
                            {{ $productType->slug }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#product_type_products" role="tab" data-toggle="tab">
                {{ trans('cruds.product.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="product_type_products">
            @includeIf('admin.productTypes.relationships.productTypeProducts', ['products' => $productType->productTypeProducts])
        </div>
    </div>
</div>

@endsection