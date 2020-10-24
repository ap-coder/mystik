@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.partner.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.partners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.id') }}
                        </th>
                        <td>
                            {{ $partner->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $partner->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.name') }}
                        </th>
                        <td>
                            {{ $partner->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.description') }}
                        </th>
                        <td>
                            {!! $partner->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.logo') }}
                        </th>
                        <td>
                            @if($partner->logo)
                                <a href="{{ $partner->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $partner->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.order') }}
                        </th>
                        <td>
                            {{ $partner->order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.url') }}
                        </th>
                        <td>
                            {{ $partner->url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.attachments') }}
                        </th>
                        <td>
                            @foreach($partner->attachments as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.additional_images') }}
                        </th>
                        <td>
                            @foreach($partner->additional_images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.products') }}
                        </th>
                        <td>
                            @foreach($partner->products as $key => $products)
                                <span class="label label-info">{{ $products->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partner.fields.slug') }}
                        </th>
                        <td>
                            {{ $partner->slug }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.partners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection