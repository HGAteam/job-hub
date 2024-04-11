<x-base-layout>
<!--begin::Products-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                {!! theme()->getSvgIcon('icons/duotune/general/gen021.svg','svg-icon svg-icon-1 position-absolute ms-4') !!}
                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="{{__('Search Product')}}" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <div class="w-100 mw-150px">
                <!--begin::Select2-->
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="{{__('Status')}}" data-kt-ecommerce-product-filter="status">
                    <option></option>
                    <option value="all">{{__('All')}}</option>
                    <option value="published">{{__('Published')}}</option>
                    <option value="scheduled">{{__('Scheduled')}}</option>
                    <option value="inactive">{{__('Inactive')}}</option>
                </select>
                <!--end::Select2-->
            </div>
            <!--begin::Add product-->
            <a href="{{route('shop.products.create')}}" class="btn btn-primary">{{__('Add Product')}}</a>
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-200px">{{__('Product')}}</th>
                    <th class="text-end min-w-100px">SKU</th>
                    <th class="text-end min-w-70px">{{__('Qty')}}</th>
                    <th class="text-end min-w-100px">{{__('Price')}}</th>
                    <th class="text-end min-w-100px">{{__('Rating')}}</th>
                    <th class="text-end min-w-100px">{{__('Status')}}</th>
                    <th class="text-end min-w-70px">{{__('Actions')}}</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/1.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02887003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="25">
                        <span class="fw-bolder ms-3">25</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$236.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/2.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04947003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="13">
                        <span class="fw-bolder ms-3">13</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$153.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/3.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04186007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="28">
                        <span class="fw-bolder ms-3">28</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$264.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/4.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01473007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="45">
                        <span class="fw-bolder ms-3">45</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$10.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/5.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03460003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="40">
                        <span class="fw-bolder ms-3">40</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$81.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/6.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01304003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="29">
                        <span class="fw-bolder ms-3">29</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$21.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/7.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01756005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="13">
                        <span class="fw-bolder ms-3">13</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$33.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/8.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02964009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="28">
                        <span class="fw-bolder ms-3">28</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$282.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/9.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01785006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="23">
                        <span class="fw-bolder ms-3">23</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$33.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/10.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03518005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="2">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">2</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$223.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/11.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 11</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02870004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="42">
                        <span class="fw-bolder ms-3">42</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$135.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/12.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 12</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01779004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="37">
                        <span class="fw-bolder ms-3">37</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$180.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/13.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 13</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03608007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="39">
                        <span class="fw-bolder ms-3">39</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$276.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/14.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 14</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01312006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="2">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">2</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$190.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/15.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 15</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03528001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="9">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">9</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$166.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/16.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 16</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04576007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="24">
                        <span class="fw-bolder ms-3">24</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$133.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/17.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 17</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04138004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="46">
                        <span class="fw-bolder ms-3">46</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$93.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/18.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 18</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04481001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="34">
                        <span class="fw-bolder ms-3">34</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$258.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/19.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 19</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02988004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="6">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">6</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$52.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/20.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 20</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03736001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="35">
                        <span class="fw-bolder ms-3">35</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$251.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/21.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 21</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01476004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="10">
                        <span class="fw-bolder ms-3">10</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$31.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/22.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 22</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04196007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="43">
                        <span class="fw-bolder ms-3">43</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$155.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/23.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 23</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02792009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="4">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">4</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$135.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/24.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 24</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01110009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="30">
                        <span class="fw-bolder ms-3">30</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$258.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/25.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 25</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04220007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="13">
                        <span class="fw-bolder ms-3">13</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$84.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/26.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 26</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01557006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="6">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">6</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$171.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/27.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 27</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03654001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="47">
                        <span class="fw-bolder ms-3">47</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$27.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/28.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 28</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04116008</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="22">
                        <span class="fw-bolder ms-3">22</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$42.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/29.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 29</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02739003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="41">
                        <span class="fw-bolder ms-3">41</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$191.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/30.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 30</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04464002</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="4">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">4</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$192.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/31.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 31</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02243001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="32">
                        <span class="fw-bolder ms-3">32</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$68.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/32.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 32</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02583009</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="20">
                        <span class="fw-bolder ms-3">20</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$20.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/33.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 33</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01872002</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="12">
                        <span class="fw-bolder ms-3">12</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$116.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/34.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 34</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04225005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="1">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">1</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$291.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/35.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 35</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03194003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="11">
                        <span class="fw-bolder ms-3">11</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$186.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/36.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 36</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01882005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="32">
                        <span class="fw-bolder ms-3">32</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$268.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/37.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 37</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02110006</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="50">
                        <span class="fw-bolder ms-3">50</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$46.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/38.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 38</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01909008</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="30">
                        <span class="fw-bolder ms-3">30</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$31.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/39.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 39</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04828003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="43">
                        <span class="fw-bolder ms-3">43</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$169.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/40.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 40</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02832005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="37">
                        <span class="fw-bolder ms-3">37</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$116.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/41.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 41</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03474004</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="49">
                        <span class="fw-bolder ms-3">49</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$39.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/42.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 42</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04972003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="14">
                        <span class="fw-bolder ms-3">14</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$84.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/43.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 43</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03968003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="36">
                        <span class="fw-bolder ms-3">36</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$30.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/44.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 44</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03185002</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="20">
                        <span class="fw-bolder ms-3">20</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$170.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/45.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 45</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">02573007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="41">
                        <span class="fw-bolder ms-3">41</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$208.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/46.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 46</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04699007</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="9">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">9</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$56.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/47.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 47</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03321003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="17">
                        <span class="fw-bolder ms-3">17</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$223.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/48.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 48</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">01187005</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="9">
                        <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bolder text-warning ms-3">9</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$178.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-4">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Inactive">
                        <!--begin::Badges-->
                        <div class="badge badge-light-danger">Inactive</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/49.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 49</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">04971003</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="41">
                        <span class="fw-bolder ms-3">41</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$204.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-5">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="{{__('Published')}}">
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">{{__('Published')}}</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
                <!--begin::Table row-->
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <!--end::Checkbox-->
                    <!--begin::Category=-->
                    <td>
                        <div class="d-flex align-items-center">
                            <!--begin::Thumbnail-->
                            <a href="#edit-product.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/50.gif')}}"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Product 50</a>
                                <!--end::Title-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::SKU=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder">03669001</span>
                    </td>
                    <!--end::SKU=-->
                    <!--begin::Qty=-->
                    <td class="text-end pe-0" data-order="47">
                        <span class="fw-bolder ms-3">47</span>
                    </td>
                    <!--end::Qty=-->
                    <!--begin::Price=-->
                    <td class="text-end pe-0">
                        <span class="fw-bolder text-dark">$165.00</span>
                    </td>
                    <!--end::Price=-->
                    <!--begin::Rating-->
                    <td class="text-end pe-0" data-order="rating-3">
                        <div class="rating justify-content-end">
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label checked">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                            <div class="rating-label">
                                {!! theme()->getSvgIcon('icons/duotune/general/gen029.svg','svg-icon svg-icon-2') !!}
                            </div>
                        </div>
                    </td>
                    <!--end::Rating-->
                    <!--begin::Status=-->
                    <td class="text-end pe-0" data-order="Scheduled">
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Scheduled</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Status=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{__('Actions')}}
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#edit-product.html" class="menu-link px-3">{{__('Edit')}}</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">{{__('Delete')}}</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </td>
                    <!--end::Action=-->
                </tr>
                <!--end::Table row-->
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->
</x-base-layout>
