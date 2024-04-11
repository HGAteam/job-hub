<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- begin::Head --}}

<head>
    @php
        $site_name = \App\Models\Setting::find(1)->value;
        $site_description = \App\Models\Setting::find(2)->value;
        $site_keywords = \App\Models\Setting::find(3)->value;
        $logo = \App\Models\Setting::find(6)->value;
        $logo_light = \App\Models\Setting::find(7)->value;
        $logo_ico = \App\Models\Setting::find(8)->value;
        $logo_apple_touch = \App\Models\Setting::find(9)->value;
        $email = \App\Models\Setting::find(10)->value;
        $phone1 = \App\Models\Setting::find(11)->value;
        $phone2 = \App\Models\Setting::find(12)->value;
        $address = \App\Models\Setting::find(13)->value;
        $facebook = \App\Models\Setting::find(14)->value;
        $twitter = \App\Models\Setting::find(15)->value;
        $linkedin = \App\Models\Setting::find(16)->value;
        $instagram = \App\Models\Setting::find(17)->value;
        $theme = new App\Core\Templates\Theme();
    @endphp
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{!! !empty($title) ? $title . ' | ' . $site_name : $site_name !!}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ !empty($keywords) ? $keywords : $site_keywords }}" />
    <meta name="description" content="{{ !empty($description) ? $description : $site_description }}">
    <meta name="author" content="hgateam.com">
    <meta name="og:keywords" content="{{ !empty($keywords) ? $keywords : $site_keywords }}" />
    <meta name="og:description" content="{{ !empty($description) ? $description : $site_description }}">
    <meta name="og:author" content="hgateam.com">

    @include('layout.theme.default.partials._styles')

</head>

<body>

    <div class="body">

        @include('layout.theme.default.partials._header')

        <div role="main" class="main @yield('main_type')">

            @yield('content')

        </div>

        @include('layout.theme.default.partials._footer')

    </div>

    @include('layout.theme.default.partials._scripts')
</body>

</html>
