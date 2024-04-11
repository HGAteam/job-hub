@extends('layout.theme.jobhunt.master')

@section('header')
    <!-- start::header -->
    <header class="section-padding style-1">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="section-head mb-60">
                                <h6 class="color-main text-uppercase">{{ __('Post or find your next job') }}</h6>
                                <h2 class="h2">
                                    {{ __('Find the job you are looking for') }} <b
                                        class="text-primary">{{ __('quickly') }}</b> {{ __('and') }} <b
                                        class="text-primary">{{ __('easily') }}</b>

                                </h2>
                            </div>
                            <style>
                                .form-group:hover .input-group-text,
                                .form-group:hover .form-control{
                                    border-color: #0080ff; /* Cambia el color del borde al pasar el mouse sobre el grupo */
                                }
                                .form-group:focus .input-group-text,
                                .form-group:active{
                                    border-color: #0080ff; /* Cambia el color del borde al pasar el mouse sobre el grupo */
                                }
                            </style>

                            <div class="form-group" style="background: white">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-transparent" style="border-right: 0px">
                                        <i class="fas fa-search text-muted transparent"></i>
                                    </span>
                                    <input name="search" type="text" class="form-control" style="border-left: 0px"
                                        placeholder="{{ __('Position, company or key word') }}">
                                </div>
                            </div>
                            <div class="bttns mt-3">
                                <a href="#" class="btn btn-sm butn-rounded btn-primary">
                                    <span>{{ __('Search') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="img">
                            <img src="{{ asset('theme/jobhunt/img/header/head.png') }}" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('theme/jobhunt/img/header/head_shape_r.png') }}" alt class="head-shape-r wow">
        <img src="{{ asset('theme/jobhunt/img/header/head_shape_l.png') }}" alt class="head-shape-l wow">
    </header>
    <!-- end::header -->
@endsection

@section('content')
@endsection
