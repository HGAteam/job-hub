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

<div class="notice-top-bar bg-primary" data-sticky-start-at="100">
    <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
        <span class="close">
            <span></span>
            <span></span>
        </span>
    </button>
    <div class="container">
        <div class="row justify-content-center py-2">
            <div class="col-9 col-md-12 text-center">
                <p class="text-color-light mb-0"><strong>DEAL OF THE WEEK</strong> - Free Diagnosis & Break Checks -
                    <strong><a href="#" class="text-color-light text-decoration-none custom-text-underline-1">Make
                            an Appointment</a></strong></p>
            </div>
        </div>
    </div>
</div>


<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}">
    <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">

        <div class="header-top header-top-small-minheight header-top-simple-border-bottom">
            <div class="container py-2">
                <div class="header-row justify-content-between">
                    <div class="header-column col-auto px-0">
                        <div class="header-row">
                            <div class="header-nav-top">
                                <ul class="nav nav-pills position-relative">
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                        <a class="nav-link ps-0" href="mailto:{{ $email }}"><i
                                                class="fas fa-envelope"></i>{{ __('Newsletter') }}</a>
                                    </li>
                                    <li
                                        class="nav-item dropdown nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                        <a class="nav-link" href="#" role="button" id="dropdownLanguage"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('theme/default/img/blank.gif') }}" class="flag flag-us"
                                                alt="English"> English
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                            <a class="dropdown-item" href="#"><img
                                                    src="{{ asset('theme/default/img/blank.gif') }}"
                                                    class="flag flag-us" alt="English"> English</a>
                                            <a class="dropdown-item" href="#"><img
                                                    src="{{ asset('theme/default/img/blank.gif') }}"
                                                    class="flag flag-es" alt="English"> Español</a>
                                        </div>
                                    </li>
                                    {{-- <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                        <span class="d-flex align-items-center font-weight-medium text-color-dark ws-nowrap text-3"><i class="icons icon-clock font-weight-bold position-relative text-3 top-1 me-2"></i> Mon - Sat 9:00am - 6:00pm</span>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="header-column justify-content-end col-auto px-0 d-none d-md-flex"> --}}
                    <div class="header-column justify-content-end col-auto px-0">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul
                                    class="header-social-icons social-icons social-icons-clean social-icons-icon-gray social-icons-medium custom-social-icons-divider">
                                    <li class="social-icons-facebook">
                                        <a href="{{ $facebook }}" target="_blank" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="{{ $twitter }}" target="_blank" title="Twitter"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons-linkedin">
                                        <a href="{{ $linkedin }}" target="_blank" title="Linkedin"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-container container">
            <div class="header-row">
                <div class="header-column w-100">
                    <div class="header-row justify-content-between">
                        <div class="header-logo z-index-2 col-lg-2 px-0">
                            <a href="{{ route('welcome') }}">
                                <img alt="{{ $site_name }}" width="123" height="48" data-sticky-width="82"
                                    data-sticky-height="40" data-sticky-top="84" src="{{ asset($logo) }}">
                            </a>
                        </div>
                        <div class="header-nav header-nav-links justify-content-end pe-lg-4 me-lg-3">
                            <div
                                class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a href="{{ request()->is('/') ? 'javascript:void(0);' : route('welcome') }}"
                                                class="nav-link {{ request()->is('/') ? 'active' : '' }}">{{ __('Home') }}</a>
                                        </li>
                                        <li><a href="{{ request()->is('who-are-we') ? 'javascript:void(0);' : route('who_are_we') }}"
                                                class="nav-link {{ request()->is('who-are-we') ? 'active' : '' }}">{{ __('Who are we?') }}</a>
                                        </li>
                                        <li><a href="{{ request()->is('products') ? 'javascript:void(0);' : route('products.index') }}"
                                                class="nav-link {{ request()->is('products') ? 'active' : '' }}">{{ __('Products') }}</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ request()->is('services') ? 'javascript:void(0);' : route('services.index') }}"
                                                class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}">{{ __('Services') }}</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ request()->is('services/something') ? 'javascript:void(0);' : route('services.show') }}"
                                                        class="dropdown-item {{ request()->is('services/something') ? 'active' : '' }}">{{ __('Test service 1') }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ request()->is('blog') ? 'javascript:void(0);' : route('blog.index') }}"
                                                class="nav-link">Blog</a></li>
                                        <li><a href="{{ request()->is('contact') ? 'javascript:void(0);' : route('contact.index') }}"
                                                class="nav-link {{ request()->is('contact') ? 'active' : '' }}">{{ __('Contact') }}</a>
                                        </li>
                                        @guest
                                            @if ($loginActive)
                                                @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @endif
                                            @endif
                                            @if ($registerActive)
                                                @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                                @endif
                                            @endif
                                        @else

                                        @if ($loginActive)
                                            <li class="dropdown">
                                                <a href="javascript:void();"
                                                class="nav-link dropdown-toggle">
                                                <i class="fas fa-user-circle fa-2x p-1"></i>
                                                    {{ auth()->user()->name }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('dashboard') }}"
                                                            class="dropdown-item">{{ __('Dashboard') }}</a></li>
                                                    <li><a href="{{ route('account.overview.index') }}"
                                                            class="dropdown-item">{{ __('Profile') }}</a></li>
                                                    <li><a href="{{ route('account.settings.index') }}"
                                                            class="dropdown-item">{{ __('Settings') }}</a></li>
                                                    <li>
                                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="d-flex col-auto pe-0 ps-0 ps-xl-3">
                            <div class="header-nav-features ps-0 ms-1">
                                <div
                                    class="header-nav-feature header-nav-features-search d-inline-flex position-relative top-3 border border-top-0 border-bottom-0 custom-remove-mobile-border-left px-4 me-2">
                                    <a href="#" class="header-nav-features-toggle text-decoration-none"
                                        data-focus="headerSearch" aria-label="Search">
                                        <i
                                            class="icons icon-magnifier header-nav-top-icon text-5 font-weight-bold position-relative top-3"></i>
                                    </a>
                                    <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0"
                                        id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1 rounded" id="headerSearch"
                                                    name="q" type="search" value=""
                                                    placeholder="Search...">
                                                <button class="btn" type="submit" aria-label="Search">
                                                    <i class="icons icon-magnifier header-nav-top-icon"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse"
                            data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
