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
                                            <a class="nav-link text-uppercase scroll-link text-uppercase" href="#firm">{{ __('Estudio') }}</a>
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
<!-- start::navbar -->
<nav class="navbar navbar-expand-lg navbar-light style-1">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('theme/jobhunt/img/logo_cd.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-uppercase active" href="#">
                        {{ __('Home') }}
                    </a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase dropdown-toggle" href="#" id="navbarDropdown2"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">about</a></li>
                        <li><a class="dropdown-item" href="#">product</a></li>
                        <li><a class="dropdown-item" href="#">services</a></li>
                        <li><a class="dropdown-item" href="#">shop</a></li>
                        <li><a class="dropdown-item" href="#">single project</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">
                        {{ __('Jobs') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">
                        {{ __('Companies') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">
                        {{ __('Recruiters') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#">
                        {{ __('Talents') }}
                    </a>
                </li>
            </ul>
            {{-- <div class="nav-side">
                <a href="#" class="nav-link small">
                    <span><b>{{ __('Post a Job') }}</b></span>
                </a>
                <div class="hotline">
                    <a href="#" class="btn sm-butn butn-rounded btn-outline-primary">
                        <span>{{ __('Create Account') }}</span>
                    </a>
                </div>
                <div class="hotline">
                    <a href="#" class="btn sm-butn butn-rounded btn-primary">
                        <span>{{ __('Login') }}</span>
                    </a>
                </div>
            </div> --}}
            <div class="d-flex align-items-center">
                <span class="nav-item pe-2">
                    <a class="btn butn-rounded btn-outline-primary sm-butn fw-bold" href="#">
                        <small>
                            {{ __('Create Account') }}
                        </small>
                    </a>
                </span>
                <a href="#" class="btn butn-rounded btn-primary sm-butn fw-bold">
                    <span>{{ __('Login') }}</span>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- end::navbar -->
