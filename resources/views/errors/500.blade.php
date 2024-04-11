@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('image')
<img src="{{ asset(theme()->getMediaUrlPath() . 'auth/500-error.png') }}" class="mw-100 mh-300px theme-light-show" alt="" />
<img src="{{ asset(theme()->getMediaUrlPath() . 'auth/500-error-dark.png') }}" class="mw-100 mh-300px theme-dark-show" alt="" />
@endsection
@section('button')
<a href="{{ route('front_index') }}" class="btn btn-sm btn-primary">{{ __('Return Home') }}</a>
@endsection
