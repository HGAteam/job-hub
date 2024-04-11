@extends('errors::minimal')

@section('title', __('Payment Required'))
@section('code', '402')
@section('message', __('Payment Required'))

@section('button') 
<a href="{{ route('front_index') }}" class="btn btn-sm btn-primary">{{ __('Return Home') }}</a>
@endsection
