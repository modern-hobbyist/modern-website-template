@extends('backend.layouts.app')

@section('title', __("Edit Blog"))

@push('before-scripts')
    {{--    <script src="/js/vendor.js"></script>--}}
@endpush


@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('blog Info')
        </x-slot>

        <x-slot name="body">
            @include('backend.blogs.includes.blog-form', ['blog' => $blog, 'action' => 'update', 'actionText' => 'Update blog', 'method' => 'PUT', 'route' => 'admin.blogs.update'])
            <hr>
            @include('backend.includes.media.media', ['model' => $blog, 'collection' => 'images', 'deleteRoute' => 'admin.blogs.delete-media'])
            <input type="hidden" name="order-route" id="orderRoute" value="{{route('admin.blogs.reorder-media', $blog)}}">
            <input type="hidden" name="csrf-value" id="csrfValue" value="{{csrf_token()}}">
        </x-slot>
    </x-backend.card>

@endsection

@push('after-scripts')
    <script src="{{mix('js/backend/includes/media.js')}}"></script>
@endpush
