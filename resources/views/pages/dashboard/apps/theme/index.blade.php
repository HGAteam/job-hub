<x-base-layout>
    <div class="row">
        <div class="col-sm-12 col-lg-12">

            <div class="card mb-5">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <h1 class="display-6">
                        {{ __('Installed Themes') }} <span class="themes-qty">(0)</span>
                    </h1>
                    <!--begin::Card title-->
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative mx-5">
                            <!--begin::Add New-->
                            <a href="#" class="btn btn-primary">{{ __('Add New') }}</a>
                            <!--end::Add New-->
                        </div>
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-ecommerce-product-filter="search"
                                class="form-control form-control-solid w-350px ps-12" placeholder="{{ __('Search Themes')}}">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                </div>
            </div>

        </div>

        <div id="theme-card-container" class="row col-lg-12 col-sm-12"></div>
        {{-- <!-- begin::Activated Theme -->
        <div class="col-lg-4">
            <!--begin::Card-->
            <div class="card border-shadow">
                <div class="card-body p-0 overlay overflow-hidden">
                    <div class="overlay-wrapper">
                        <img src="{{ asset(theme()->getMediaUrlPath() . 'stock/600x400/img-1.jpg') }}" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer bg-dark bg-opacity-25">
                        <a href="#" class="btn btn-light-dark btn-shadow ms-2">{{ __('Theme Details') }}</a>
                    </div>
                </div>
                <div class="card-footer py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-start mb-2"><span class="fs-6 fw-bolder text-gray-800">{{ __('Active') }}:
                            </span>{{ __('By Default') }}</p>
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">{{ __('Customize') }}</a>
                    </div>
                </div>

            </div>
            <!--end::Card-->
        </div>
        <!-- end::Activated Theme --> --}}

        <!-- begin::Custom Themes -->
        {{-- <div class="col-lg-4">
            <!--begin::Card-->
            <div class="card">
                <div class="card-body p-0 overlay overflow-hidden">
                    <div class="overlay-wrapper">
                        <img src="{{ asset(theme()->getMediaUrlPath() . 'stock/600x400/img-2.jpg') }}" alt=""
                            class="w-100" />
                    </div>
                    <div class="overlay-layer bg-dark bg-opacity-25">
                        <a href="#" class="btn btn-light-dark btn-shadow ms-2">{{ __('Theme Details') }}</a>
                    </div>
                </div>
                <div class="card-footer py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-start mb-2"><span class="fs-6 fw-bolder text-gray-800">{{ __('Theme') }}:
                            </span>{{ __('Name') }}</p>
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-primary btn-shadow">{{ __('Activate') }}</a>
                            <a href="#" class="btn btn-sm btn-danger btn-shadow">{{ __('Delete') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div> --}}
        <!-- end::Custom Themes -->

        <!-- begin:Pagination -->
        {{-- <ul class="pagination pagination-circle my-5">
            <li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a>
            </li>
            <li class="page-item "><a href="#" class="page-link">1</a></li>
            <li class="page-item active"><a href="#" class="page-link">2</a></li>
            <li class="page-item "><a href="#" class="page-link">3</a></li>
            <li class="page-item "><a href="#" class="page-link">4</a></li>
            <li class="page-item "><a href="#" class="page-link">5</a></li>
            <li class="page-item "><a href="#" class="page-link">6</a></li>
            <li class="page-item next"><a href="#" class="page-link"><i class="next"></i></a></li>
        </ul> --}}
        <!-- end:Pagination -->
        <div class="modal fade" tabindex="-1" id="theme_details">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title"></h3>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>

                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"></button>
                        <button type="button" class="btn btn-primary"></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-base-layout>
