@extends('backend.layouts.app')

@section('title', __('labels.backend.projects.management') . ' | ' . __('labels.backend.projects.create'))

@push('before-scripts')
    {{--    <script src="/js/vendor.js"></script>--}}
@endpush


@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Project Info')
        </x-slot>

        <x-slot name="body">
            @include('backend.projects.includes.project-form', ['project' => $project, 'action' => 'update', 'actionText' => 'Update Project', 'method' => 'PUT', 'route' => 'admin.projects.update'])
            <hr>
            @include('backend.includes.media.media', ['model' => $project, 'collection' => 'images', 'deleteRoute' => 'admin.projects.delete-media'])
            <input type="hidden" name="order-route" id="orderRoute" value="{{route('admin.projects.reorder-media', $project)}}">
            <input type="hidden" name="csrf-value" id="csrfValue" value="{{csrf_token()}}">
        </x-slot>
    </x-backend.card>

@endsection

@push('after-scripts')
    <script src="{{mix('js/backend/includes/media.js')}}"></script>
@endpush
