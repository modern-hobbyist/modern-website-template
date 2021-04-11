@extends('backend.layouts.app')

@section('title', __("Edit Theme"))

{{--@push('before-styles')--}}
{{--@endpush--}}

@push('before-scripts')
    {{--    <script src="/js/vendor.js"></script>--}}
@endpush


@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Theme Info')
        </x-slot>

        <x-slot name="body">
            @include('backend.themes.includes.theme-form', ['theme' => $theme, 'action' => 'update', 'actionText' => 'Update Theme', 'method' => 'PUT', 'route' => 'admin.themes.update'])
            <hr>
            @include('backend.includes.media.media', ['model' => $theme, 'collection' => 'images', 'deleteRoute' => 'admin.themes.delete-media'])
            <input type="hidden" name="order-route" id="orderRoute" value="{{route('admin.themes.reorder-media', $theme)}}">
            <input type="hidden" name="csrf-value" id="csrfValue" value="{{csrf_token()}}">
        </x-slot>
    </x-backend.card>

@endsection

@push('after-scripts')
    <script src="{{mix('js/backend/includes/media.js')}}"></script>
@endpush
