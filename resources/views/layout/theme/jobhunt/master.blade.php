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

    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ !empty($keywords) ? $keywords : $site_keywords }}" />
    <meta name="description" content="{{ !empty($description) ? $description : $site_description }}">
    <meta name="author" content="hgateam.com">
    <meta name="og:keywords" content="{{ !empty($keywords) ? $keywords : $site_keywords }}" />
    <meta name="og:description" content="{{ !empty($description) ? $description : $site_description }}">
    <meta name="og:author" content="hgateam.com">

    @include('layout.theme.jobhunt.partials._styles')

</head>

<body>
    @include('layout.theme.jobhunt.partials._pre_loader')

    @include('layout.theme.jobhunt.partials._header')

    @include('layout.theme.jobhunt.partials._navigation')

    @yield('header')

    <main class="@yield('main_type')">
        @yield('content')
    </main>

    @include('layout.theme.jobhunt.partials._footer')

    <!-- start::top-button -->
    <a href="#" class="to_top">
        <i class="bi bi-chevron-up"></i>
        <small>top</small>
    </a>
    <!-- end::top-button -->

    @include('layout.theme.jobhunt.partials._scripts')
</body>

</html>
