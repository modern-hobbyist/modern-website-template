@extends('backend.layouts.app')

@section('title', __("Create Link"))

@push('before-styles')
@endpush

@push('before-scripts')
    {{--    <script src="/js/vendor.js"></script>--}}
@endpush

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('link Info')
        </x-slot>

        <x-slot name="body">
            @include('backend.links.includes.link-form', ['link' => new App\Models\link, 'action' => 'create', 'actionText' => 'Create link', 'method' => 'POST', 'route' => 'admin.links.store'])
            <input type="hidden" name="csrf-value" id="csrfValue" value="{{csrf_token()}}">
        </x-slot>
    </x-backend.card>
@endsection


@push('after-scripts')
    <script src="{{mix('js/backend/links/link.js')}}"></script>
@endpush
