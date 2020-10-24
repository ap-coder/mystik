@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.productReview.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.product-reviews.update", [$productReview->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="published" value="0">
                    <input class="form-check-input" type="checkbox" name="published" id="published" value="1" {{ $productReview->published || old('published', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="published">{{ trans('cruds.productReview.fields.published') }}</label>
                </div>
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productReview.fields.published_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title">{{ trans('cruds.productReview.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $productReview->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productReview.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="rating">{{ trans('cruds.productReview.fields.rating') }}</label>
                <input class="form-control {{ $errors->has('rating') ? 'is-invalid' : '' }}" type="number" name="rating" id="rating" value="{{ old('rating', $productReview->rating) }}" step="1" required>
                @if($errors->has('rating'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rating') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productReview.fields.rating_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_id">{{ trans('cruds.productReview.fields.product') }}</label>
                <select class="form-control select2 {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id" id="product_id">
                    @foreach($products as $id => $product)
                        <option value="{{ $id }}" {{ (old('product_id') ? old('product_id') : $productReview->product->id ?? '') == $id ? 'selected' : '' }}>{{ $product }}</option>
                    @endforeach
                </select>
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productReview.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="body">{{ trans('cruds.productReview.fields.body') }}</label>
                <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" id="body">{{ old('body', $productReview->body) }}</textarea>
                @if($errors->has('body'))
                    <div class="invalid-feedback">
                        {{ $errors->first('body') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productReview.fields.body_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="website">{{ trans('cruds.productReview.fields.website') }}</label>
                <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text" name="website" id="website" value="{{ old('website', $productReview->website) }}">
                @if($errors->has('website'))
                    <div class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productReview.fields.website_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="signiture">{{ trans('cruds.productReview.fields.signiture') }}</label>
                <input class="form-control {{ $errors->has('signiture') ? 'is-invalid' : '' }}" type="text" name="signiture" id="signiture" value="{{ old('signiture', $productReview->signiture) }}">
                @if($errors->has('signiture'))
                    <div class="invalid-feedback">
                        {{ $errors->first('signiture') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productReview.fields.signiture_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="signiture_company">{{ trans('cruds.productReview.fields.signiture_company') }}</label>
                <input class="form-control {{ $errors->has('signiture_company') ? 'is-invalid' : '' }}" type="text" name="signiture_company" id="signiture_company" value="{{ old('signiture_company', $productReview->signiture_company) }}">
                @if($errors->has('signiture_company'))
                    <div class="invalid-feedback">
                        {{ $errors->first('signiture_company') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productReview.fields.signiture_company_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection