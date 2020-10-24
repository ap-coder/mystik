@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.discussion.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.discussions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.discussion.fields.id') }}
                        </th>
                        <td>
                            {{ $discussion->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.discussion.fields.title') }}
                        </th>
                        <td>
                            {{ $discussion->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.discussion.fields.content_area') }}
                        </th>
                        <td>
                            {!! $discussion->content_area !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.discussion.fields.header_image') }}
                        </th>
                        <td>
                            @if($discussion->header_image)
                                <a href="{{ $discussion->header_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $discussion->header_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.discussion.fields.attachments') }}
                        </th>
                        <td>
                            @foreach($discussion->attachments as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.discussion.fields.slug') }}
                        </th>
                        <td>
                            {{ $discussion->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.discussion.fields.user') }}
                        </th>
                        <td>
                            {{ $discussion->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.discussions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection