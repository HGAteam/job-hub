@extends('errors::minimal')

@section('title', __('Web Site Maintenance'))
@section('code', '505')
@section('message', __('We are improving the functionalities and aspects to make this site more intuitive and easier to understand. We appreciate your patience. Try us later').'.')
@section('image')
<img src="{{ asset(theme()->getMediaUrlPath() . 'auth/505-error.png') }}" class="mw-100 mh-300px theme-light-show" alt="" />
<img src="{{ asset(theme()->getMediaUrlPath() . 'auth/505-error-dark.png') }}" class="mw-100 mh-300px theme-dark-show" alt="" />
@endsection


