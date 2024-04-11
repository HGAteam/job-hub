@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))

@section('button') 
<a href="{{ route('front_index') }}" class="btn btn-sm btn-primary">{{ __('Return Home') }}</a>
@endsection