<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"{!! theme()->printHtmlAttributes('html') !!}
    {{ theme()->printHtmlClasses('html') }}>
{{-- begin::Head --}}

<head>
    <meta charset="utf-8" />
    <meta name="description" content="{{ \App\Models\Setting::find(1)->value }}" />
    <meta name="plan" content="{{ \App\Models\Setting::find(2)->value }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ !empty(config('app.name')) ? config('app.name') . ' | ' . '' : '' }}@yield('title')
    </title>

    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}"{!! theme()->printHtmlAttributes('html') !!}
        {{ theme()->printHtmlClasses('html') }}" />
    <meta property="og:type" content="{{ \App\Models\Setting::find(2)->value }}" />
    <meta property="og:title" content="{{ \App\Models\Setting::find(1)->value }}" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ '/logo-lcd.ico' }}" />
    < {{-- begin::Fonts --}} {{ theme()->includeFonts() }} {{-- end::Fonts --}} @if (theme()->hasOption('page', 'assets/vendors/css'))
        {{-- begin::Page Vendor Stylesheets(used by this page) --}}
        @foreach (array_unique(theme()->getOption('page', 'assets/vendors/css')) as $file)
            {!! preloadCss(assetCustom($file)) !!}
        @endforeach
        {{-- end::Page Vendor Stylesheets --}}
        @endif

        @if (theme()->hasOption('page', 'assets/custom/css'))
            {{-- begin::Page Custom Stylesheets(used by this page) --}}
            @foreach (array_unique(theme()->getOption('page', 'assets/custom/css')) as $file)
                {!! preloadCss(assetCustom($file)) !!}
            @endforeach
            {{-- end::Page Custom Stylesheets --}}
        @endif

        @if (theme()->hasOption('assets', 'css'))
            {{-- begin::Global Stylesheets Bundle(used by all pages) --}}
            @foreach (array_unique(theme()->getOption('assets', 'css')) as $file)
                @if (strpos($file, 'plugins') !== false)
                    {!! preloadCss(assetCustom($file)) !!}
                @else
                    <link href="{{ assetCustom($file) }}" rel="stylesheet" type="text/css" />
                @endif
            @endforeach
            {{-- end::Global Stylesheets Bundle --}}
        @endif

        @if (theme()->getViewMode() === 'preview')
            {{ theme()->getView('partials/trackers/_ga-general') }}
            {{ theme()->getView('partials/trackers/_ga-tag-manager-for-head') }}
        @endif

        @yield('styles')
        <!--end::Global Stylesheets Bundle-->
</head>
{{-- end::Head --}}


<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!--begin::Theme mode setup on page load-->
<!--begin::Theme mode setup on page load-->
<script>
    if ( document.documentElement ) {
        var name = document.body.getAttribute("data-kt-name");
        var themeMode = localStorage.getItem("kt_" + name + "_theme_mode_value");
        var enableSystemMode = true;

        if ( themeMode ) {
            if ( themeMode === "dark" ) {
                document.documentElement.setAttribute("data-theme", "dark");
            } else if ( themeMode === "light" ) {
                document.documentElement.setAttribute("data-theme", "light");
            } else if ( enableSystemMode === true || themeMode === "system" ) {
                document.documentElement.setAttribute("data-theme", window.matchMedia('(prefers-color-scheme: dark)') ? "dark" : "light");
            }
        } else {
            document.documentElement.setAttribute("data-theme", "light");
        }
    }
</script>
<!--end::Theme mode setup on page load-->

@if (theme()->getOption('layout', 'loader/display') === true)
{{ theme()->getView('layout/_loader') }}
@endif

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('/demo1/media/auth/bg7.jpg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('/demo1/media/auth/bg7-dark.jpg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Signup Welcome Message -->
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center text-center p-10">
                <!--begin::Wrapper-->
                <div class="card card-flush w-lg-650px py-5">
                    <div class="card-body py-15 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="fw-bolder fs-2qx text-gray-900 mb-4">{{ __('System Error') }} @yield('code')</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fw-semibold fs-6 text-gray-500 mb-7">@yield('message')</div>
                        <!--end::Text-->
                        <!--begin::Illustration-->
                        <div class="mb-11">
                            @yield('image')
                        </div>
                        <!--end::Illustration-->
                        <!--begin::Link-->
                        <div class="mb-0">
                            @yield('button')
                        </div>
                        <!--end::Link-->
                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Signup Welcome Message-->
    </div>
    <!--end::Root-->

{{-- begin::Javascript --}}
@if (theme()->hasOption('assets', 'js'))
    {{-- begin::Global Javascript Bundle(used by all pages) --}}
    @foreach (array_unique(theme()->getOption('assets', 'js')) as $file)
        <script src="{{ asset(theme()->getDemo() . '/' .$file) }}"></script>
    @endforeach
    {{-- end::Global Javascript Bundle --}}
@endif

@if (theme()->hasOption('page', 'assets/vendors/js'))
    {{-- begin::Page Vendors Javascript(used by this page) --}}
    @foreach (array_unique(theme()->getOption('page', 'assets/vendors/js')) as $file)
        <script src="{{ asset(theme()->getDemo() . '/' .$file) }}"></script>
    @endforeach
    {{-- end::Page Vendors Javascript --}}
@endif

@if (theme()->hasOption('page', 'assets/custom/js'))
    {{-- begin::Page Custom Javascript(used by this page) --}}
    @foreach (array_unique(theme()->getOption('page', 'assets/custom/js')) as $file)
        <script src="{{ asset(theme()->getDemo() . '/' .$file) }}"></script>
    @endforeach
    {{-- end::Page Custom Javascript --}}
@endif
{{-- end::Javascript --}}

@if (theme()->getViewMode() === 'preview')
    {{ theme()->getView('partials/trackers/_ga-tag-manager-for-body') }}
@endif

@yield('scripts')
</body>
<!--end::Body-->

</html>
