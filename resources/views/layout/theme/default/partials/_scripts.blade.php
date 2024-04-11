@foreach ($theme->listJS() as $jsFile)
    <script src="{{asset($jsFile)}}"></script>
@endforeach

@yield('scripts')
