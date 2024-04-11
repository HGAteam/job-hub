<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-primary fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                {!! theme()->getSvgIcon('icons/duotune/general/gen060.svg', 'svg-icon-3') !!}
            </span>
            <span class="menu-title">
                {{ __('Light')}}
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                {!! theme()->getSvgIcon('icons/duotune/general/gen061.svg', 'svg-icon-3') !!}
            </span>
            <span class="menu-title">
                {{ __('Dark')}}
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->

