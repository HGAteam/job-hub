@extends('errors::minimal')

@section('title', __('Page not found or path changed location'))
@section('code', '404')
@section('message', __('Page not found or path changed. Please verify that the path you are trying to access is spelled correctly or still exists. Thank you for your patience.'))
@section('image')
<img src="{{ asset(theme()->getMediaUrlPath() . 'auth/404-error.png') }}" class="mw-100 mh-300px theme-light-show" alt="" />
<img src="{{ asset(theme()->getMediaUrlPath() . 'auth/404-error-dark.png') }}" class="mw-100 mh-300px theme-dark-show" alt="" />
@endsection
@section('button')
<a href="{{ URL::previous() }}" class="btn btn-sm btn-primary">{{ __('Return Home') }}</a>
@endsection
