@extends('backend.layouts.app')

@section('title', __("Create Theme"))

@push('before-styles')
@endpush

@push('before-scripts')
    {{--    <script src="/js/vendor.js"></script>--}}
@endpush

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Theme Info')
        </x-slot>

        <x-slot name="body">
            @include('backend.themes.includes.theme-form', ['theme' => new App\Models\Theme, 'action' => 'create', 'actionText' => 'Create Theme', 'method' => 'POST', 'route' => 'admin.themes.store'])
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
@endpush

