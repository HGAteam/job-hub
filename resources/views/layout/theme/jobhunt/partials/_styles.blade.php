    <!-- Favicon -->
    <link rel="shortcut icon" href="{{$logo_ico}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset($logo_apple_touch)}}">
    <meta name="msapplication-TileImage" content="{{$logo_ico}}" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Web Fonts  -->
    {!! $theme->includeFonts() !!}
    @foreach ($theme->listCSS() as $cssFile)
        <link rel="stylesheet" href="{{ asset($cssFile) }}">
    @endforeach
@yield('css')

