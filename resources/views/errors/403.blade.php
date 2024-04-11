@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('button') 
<a href="{{ route('front_index') }}" class="btn btn-sm btn-primary">{{ __('Return Home') }}</a>
@endsection
