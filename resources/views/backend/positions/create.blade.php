@extends('backend.layouts.app')

@section('title', __('labels.backend.positions.management') . ' | ' . __('labels.backend.positions.create'))

@push('before-styles')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endpush

@push('before-scripts')
    {{--    <script src="/js/vendor.js"></script>--}}
@endpush

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Position Info')
        </x-slot>

        <x-slot name="body">
            @include('backend.positions.includes.position-form', ['position' => new App\Models\Position, 'action' => 'create', 'actionText' => 'Create Position', 'method' => 'POST', 'route' => 'admin.positions.store'])
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush

