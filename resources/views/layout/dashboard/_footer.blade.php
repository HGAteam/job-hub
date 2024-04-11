@role(['Administrator','Editor','Author'])
 <!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column {{ theme()->printHtmlClasses('footer', false) }}" id="kt_footer">
    <!--begin::Container-->
    <div class="{{ theme()->printHtmlClasses('footer-container', false) }} d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-bold me-1">{{ date("Y") }}&copy;</span>
            <a href="" target="_blank" class="text-gray-800 text-hover-primary"><strong>Powered By</strong>  HGATeam</a>
        </div>
        <!--end::Copyright-->

        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
            <li class="menu-item"><a href="https://hgateam.com" target="_blank" class="menu-link px-2">{{ __('About Us')}}</a></li>

            <li class="menu-item"><a href="https://hgateam.com/support-center" target="_blank" class="menu-link px-2">{{ __('Support Center')}}</a></li>

            <li class="menu-item"><a href="#contact" target="_blank" class="menu-link px-2">{{ __('Contact')}}</a></li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
@else
 <!--begin::Footer-->
 <div class="footer py-4 d-flex flex-lg-column {{ theme()->printHtmlClasses('footer', false) }}" id="kt_footer">
    <!--begin::Container-->
    <div class="{{ theme()->printHtmlClasses('footer-container', false) }} d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted me-1">{{ date("Y") }}&copy; {{ __('Copyright')}}. {{ __('All rights reserved')}}.</span>
            <a href="{{url('home')}}" target="_blank" class="text-gray-800 text-hover-primary">{{\App\Models\Setting::find(1)->value('value')}}</a>
        </div>
        <!--end::Copyright-->

        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
            <li class="menu-item"><a href="#about-us" target="_blank" class="menu-link px-2">{{ __('About Us')}}</a></li>

            <li class="menu-item"><a href="#support-center" target="_blank" class="menu-link px-2">{{ __('Support Center')}}</a></li>

            <li class="menu-item"><a href="#contact" target="_blank" class="menu-link px-2">{{ __('Contact')}}</a></li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
@endrole

