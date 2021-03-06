<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ appName() }}</title>
        <meta name="description" content="@yield('meta_description', appName())">
        <meta name="author" content="@yield('meta_author', 'Charlie Steenhagen')">
        @yield('meta')

        @if($active_theme->favicon() != null)
            <link rel="icon"
                  type="{{$active_theme->favicon()->mime_type}}"
                  href="{{$active_theme->favicon()->getUrl()}}">
        @endif

        @include('frontend.includes.color_styles')

        @stack('before-styles')
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
        @stack('after-styles')
    </head>
    @if(isset($active_theme) && $active_theme->background_image() != null)
        <body data-image="{{$active_theme->background_image()->getUrl()}}" class="lazy-load">
    @else
        <body>
    @endif
        @include('includes.partials.read-only')
        @include('includes.partials.logged-in-as')
        @include('includes.partials.announcements')
        @include('frontend.includes.nav')

        <div id="app" class="flex-center position-ref full-height">
{{--            <div class="top-right links">--}}
{{--                @auth--}}
{{--                    @if ($logged_in_user->isUser())--}}
{{--                        <a href="{{ route('frontend.user.dashboard') }}">@lang('Dashboard')</a>--}}
{{--                    @endif--}}

{{--                    <a href="{{ route('frontend.user.account') }}">@lang('Account')</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('frontend.auth.login') }}">@lang('Login')</a>--}}

{{--                    @if (config('boilerplate.access.user.registration'))--}}
{{--                        <a href="{{ route('frontend.auth.register') }}">@lang('Register')</a>--}}
{{--                    @endif--}}
{{--                @endauth--}}
{{--            </div><!--top-right-->--}}

            <div class="content">
                @include('includes.partials.messages')

                <div class="title m-b-md">
                    {{env('APP_NAME')}}
                </div><!--title-->

            </div><!--content-->
        </div><!--app-->

        @stack('before-scripts')
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/frontend.js') }}"></script>
        @stack('after-scripts')
    </body>
</html>
