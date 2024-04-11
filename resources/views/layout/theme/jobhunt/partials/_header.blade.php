{{-- <header id="header"
    class="header-transparent header-semi-transparent header-semi-transparent-light header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">


    <div class="header-body header-body-bottom-border border-top-0">

        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/" class="d-none d-md-none d-lg-block">
                                <img alt="ICG & ASOC" height="98" width="170" data-sticky-height="60" data-sticky-width="112" data-sticky-top="5" src="{{ asset('img/logo2.png') }}">
                            </a>

                            <a href="/" class="d-sm-block d-lg-none px-3">
                                <img alt="ICG & ASOC" height="70" width="104" data-sticky-height="70" data-sticky-width="102" data-sticky-top="5" src="{{ asset('img/logo2.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-top d-none d-md-block border-bottom-0">
                        <div class="container">
                            <div class="header-row">

                                <div class="header-column justify-content-end">
                                    <div class="header-row">
                                        <ul class="list list-unstyled list-inline mb-0">
                                            <li class="list-inline-item text-color-dark me-md-4 mb-0">
                                                <i
                                                    class="icons icon-phone text-color-primary text-4 position-relative top-2 me-1"></i>
                                                <a href="tel:+543814310765"
                                                    class="text-color-dark text-color-hover-primary text-decoration-none">
                                                    <strong>+54 (381) 4310765</strong>
                                                </a>
                                            </li>
                                            <li class="list-inline-item text-color-dark me-md-4 mb-0">
                                                <i
                                                    class="icons fab fa-linkedin text-color-primary text-4 position-relative top-2 me-1"></i>
                                                <a href="https://www.linkedin.com/company/colombres-garmendia-asoc/" target="_blank"
                                                    class="text-color-dark text-color-hover-primary text-decoration-none">
                                                    <strong>Linkedin</strong>
                                                </a>
                                            </li>

                                        </ul>

                                        <a href="{{ url('contact') }}"
                                            class="btn btn-primary btn-px-4 py-3 font-weight-bold text-2 rounded-0 ms-lg-4 text-uppercase"
                                            target="_blank">{{ __('Request Consultation') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div
                                class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="scroll-item">
                                            <a class="nav-link scroll-link text-uppercase" href="#firm">{{ __('Estudio') }}</a>
                                        </li>
                                        <li class="scroll-item">
                                            <a class="nav-link scroll-link text-uppercase" href="#partners">{{ __('Socios') }}</a>
                                        </li>
                                        <li class="scroll-item">
                                            <a class="nav-link scroll-link text-uppercase" href="#news">{{ __('Novedades') }}</a>
                                        </li>
                                        <li class="scroll-item">
                                            <a class="nav-link scroll-link text-uppercase"
                                                href="#references">{{ __('Referencias') }}</a>
                                        </li>

                                        <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                                            <a class="nav-link text-uppercase {{ request()->is('contact') ? 'active' : '' }}"
                                                href="{{ url('contact') }}">
                                                {{ __('Contacto') }}
                                            </a>
                                        </li>

                                        @guest
                                        @else
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle text-uppercase" href="#">
                                                    {{ Auth::user()->name }}
                                                    <i class="fas fa-user-circle"
                                                        style="padding-left:10px;font-size:20px;"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item text-uppercase"
                                                            href="{{ url('home') }}">{{ __('My Dashboard') }}</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-uppercase" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="header-nav-features header-nav-features-no-border">
                            <div class="header-nav-feature header-nav-features-search">
                                <div class="btn-group dropstart">
                                    @if (config('app.locale') == 'es')
                                    <button class="btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="flag flag-ar"></i> ES
                                    </button>
                                    @else
                                    <button class="btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="flag flag-gb"></i> EN
                                    </button>
                                    @endif
                                    <div class="dropdown-menu">
                                        @if (config('app.locale') == 'es')
                                        <li>
                                            <a class="dropdown-item active" style="border:0px;">
                                                <i class="flag flag-ar"></i>
                                                <span class="text-white" style="font-size:14px">
                                                    Español
                                                 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" style="border:0px;" href="/language/en">
                                                <i class="flag flag-gb"></i>
                                                <span class="" style="font-size:14px">
                                                    Ingles
                                                </span>
                                            </a>
                                        </li>
                                        @else
                                        <li>
                                            <a class="dropdown-item active" style="border:0px;">
                                                <i class="flag flag-gb"></i>
                                                <span class="text-white" style="font-size:14px">
                                                    English
                                                 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" style="border:0px;" href="/language/es">
                                                <i class="flag flag-ar"></i>
                                                <span class="" style="font-size:14px">
                                                    Español
                                                </span>
                                            </a>
                                        </li>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                            data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}
@php
    $theme = new \App\Core\Templates\Theme();
    $loginActive = $theme->isLoginEnabled();
    $registerActive = $theme->isRegisterEnabled();
@endphp
<!-- start::top-navbar -->
<div class="top-navbar style-1">
    <div class="container">
        <div class="content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="top-links">
                        <div class="text text-white">
                            <i class="fas fa-bullhorn"></i>
                            <strong>Now Hiring:</strong>
                            <span>Are you a driven and motivated <a href="#" class="p-0"><u>1st Line IT Support Engineer?</u></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="r-side">
                        <div class="socail-icons">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="me-1" src="{{asset('theme/jobhunt/img/lang.png')}}" alt=""> English
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Español</a></li>
                                <li><a class="dropdown-item" href="#">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::top-navbar -->
