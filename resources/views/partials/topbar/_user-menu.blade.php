<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="{{ auth()->user()->avatar_url }}"/>
            </div>
            <!--end::Avatar-->

            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bolder d-flex align-items-center fs-5">
                    {{ auth()->user()->name }}
                    {{-- @if (auth()->user()->hasRole('System Admin') || auth()->user()->hasRole('Administrator'))
                    <span class="badge badge-light-danger fw-bolder fs-8 px-2 py-1 ms-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __('Standard Plan') }}">Std</span>
                    @endif --}}
                </div>
                {{-- <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span> --}}
                <a href="javascript:void(0);" class="fw-bold text-muted text-hover-primary fs-7" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ __(auth()->user()->role->description) }}">{{ auth()->user()->role->name }}</a>
                {{-- <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a> --}}
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="{{ theme()->getPageUrl('account.overview.index') }}" class="menu-link px-5">
            {{ __('My Profile') }}
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                {{ __('Language') }}
                @if(config('app.locale') == 'es')
                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    {{ __('Spanish') }} <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset(theme()->getMediaUrlPath() . 'flags/spain.svg') }}" alt="metronic"/>
                </span>
                @else
                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    {{ __('English') }} <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset(theme()->getMediaUrlPath() . 'flags/united-states.svg') }}" alt="metronic"/>
                </span>
                @endif
            </span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            @if(config('app.locale')=='es')
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="javascript:void(0);" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset(theme()->getMediaUrlPath() . 'flags/spain.svg') }}" alt="metronic"/>
                    </span>
                    {{ __('Spanish') }}
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="/language/en" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset(theme()->getMediaUrlPath() . 'flags/united-states.svg') }}" alt="metronic"/>
                    </span>
                    {{ __('English') }}
                </a>
            </div>
            <!--end::Menu item-->
            @else
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="javascript:void(0);" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset(theme()->getMediaUrlPath() . 'flags/united-states.svg') }}" alt="metronic"/>
                    </span>
                    {{ __('English') }}
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="/language/es" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset(theme()->getMediaUrlPath() . 'flags/spain.svg') }}" alt="metronic"/>
                    </span>
                    {{ __('Spanish') }}
                </a>
            </div>
            <!--end::Menu item-->
            @endif
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="#" data-action="{{ theme()->getPageUrl('logout') }}" data-method="post" data-csrf="{{ csrf_token() }}" data-reload="true" class="button-ajax menu-link px-5">
            {{ __('Sign Out') }}
        </a>
    </div>
    <!--end::Menu item-->

    @if (theme()->isDarkModeEnabled())
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <div class="menu-content px-5">
                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="skin" id="kt_user_menu_dark_mode_toggle" {{ theme()->isDarkMode() ? 'checked' : '' }} data-kt-url="{{ theme()->getPageUrl('', '', theme()->isDarkMode() ? '' : 'dark') }}"/>
                    <span class="pulse-ring ms-n1"></span>

                    <span class="form-check-label text-gray-600 fs-7">
                        {{ __('Dark Mode') }}
                    </span>
                </label>
            </div>
        </div>
        <!--end::Menu item-->
    @endif
</div>
<!--end::Menu-->
