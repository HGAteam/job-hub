@php
        $logoFileName = \App\Models\Setting::find(7)->value;
    if (theme()->getOption('layout', 'aside/theme') === 'light') {
        $logoFileName = \App\Models\Setting::find(6)->value;
    }
@endphp

{{-- begin::Aside --}}
<div id="kt_aside" class="aside {{ theme()->printHtmlClasses('aside', false) }}" data-kt-drawer="true"
    data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">

    {{-- begin::Brand --}}
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        {{-- begin::Logo --}}
        <a href="{{ theme()->getPageUrl('') }}" data-bs-toggle="tootltip" data-bs-placement="bottom" target="_blank" title="{{ __('Go to Website') }}">
            <img alt="Logo" src="{{ asset($logoFileName) }}"
                class="h-50px logo" />
        </a>
        {{-- end::Logo --}}

        @if (theme()->getOption('layout', 'aside/minimize') === true)
            {{-- begin::Aside toggler --}}
            <div id="kt_aside_toggle"
            class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                data-kt-toggle="true"
                data-kt-toggle-state="active"
                data-kt-toggle-target="body"
                data-kt-toggle-name="aside-minimize">

                {!! theme()->getSvgIcon('icons/duotune/arrows/arr080.svg', 'svg-icon-1 rotate-180') !!}
            </div>
            {{-- end::Aside toggler --}}
        @endif
    </div>
    {{-- end::Brand --}}

    {{-- begin::Aside menu --}}
    <div class="aside-menu flex-column-fluid">
        {{ theme()->getView('layout/aside/_menu') }}
    </div>
    {{-- end::Aside menu --}}

    {{-- begin::Footer --}}
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <a href="{{ theme()->getPageUrl('settings.index') }}" class="btn btn-custom btn-secondary w-100 {{request()->is('home/settings')? 'active': ''}}">
            {!! theme()->getSvgIcon('icons/duotune/coding/cod001.svg', 'svg-icon-2') !!}
            <span class="btn-label">
                {{ __('System Settings') }}
            </span>
        </a>
    </div>
    {{-- end::Footer --}}
</div>
{{-- end::Aside --}}
