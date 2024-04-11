@php
    $nav = [
        ['title' => trans('Settings'), 'view' => 'user-manager/profile/settings/' . $user->slug],
    ];
@endphp

<!--begin::Navbar-->
<div class="card {{ $class }}">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <img style="width:100%;" src="{{ $user->info->avatar_url }}" alt="image" />
                    <div
                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px">
                    </div>
                </div>
            </div>
            <!--end::Pic-->

            <!--begin::Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a href="#"
                                class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">{{ $user->name }}</a>
                            {{-- <a href="#">
                                {!! theme()->getSvgIcon("icons/duotune/general/gen026.svg", "svg-icon-1 svg-icon-primary") !!}
                            </a> --}}
                        </div>
                        <!--end::Name-->

                        <!--begin::Info-->
                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                            <a href="#"
                                class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                {!! theme()->getSvgIcon('icons/duotune/communication/com006.svg', 'svg-icon-4 me-1') !!}
                                {{ __($user->role->name) }}
                            </a>
                            {{-- <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                {!! theme()->getSvgIcon("icons/duotune/general/gen018.svg", "svg-icon-4 me-1") !!}
                                {{ $user->info->country }}, {{ $user->info->state }}, {{ $user->info->city }}
                            </a> --}}
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                {!! theme()->getSvgIcon('icons/duotune/communication/com011.svg', 'svg-icon-4 me-1') !!}
                                {{ $user->email }}
                            </a>

                        </div>
                        <!--end::Info-->
                        <!--begin::Label-->
                        <label class="col-lg-6 fw-bold text-muted">{{ __('Contact Phone') }}</label>
                        <span class="fw-bolder fs-6 me-2">
                            {{ $user->info->phone }}

                            @if ($user->info->phone)
                                <span class="badge badge-success">{{ __('Verified') }}</span>
                            @else
                                --
                            @endif
                        </span>

                    </div>
                    <!--end::User-->
                    <a href="{{ theme()->getPageUrl('user-manager/profile/settings/'.$user->slug) }}" class="btn btn-primary align-self-center">{{ __('Edit Account') }}</a>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->

        <!--begin::Navs-->
        <div class="d-flex overflow-auto h-55px">
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                @foreach ($nav as $each)
                    <!--begin::Nav item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary me-6 {{ theme()->getPagePath() === $each['view'] ? 'active' : '' }}"
                            href="{{ $each['view'] ? theme()->getPageUrl($each['view']) : '#' }}">
                            {{ $each['title'] }}
                        </a>
                    </li>
                    <!--end::Nav item-->
                @endforeach
            </ul>
        </div>
        <!--begin::Navs-->
    </div>
</div>
<!--end::Navbar-->
