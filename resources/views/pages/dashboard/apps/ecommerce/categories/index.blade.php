<x-base-layout>
<!--begin::Category-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                {!! theme()->getSvgIcon('icons/duotune/general/gen021.svg', 'svg-icon svg-icon-1 position-absolute ms-4') !!}
                <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="{{__('Search Category')}}" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Add customer-->
            <a href="{{route('shop.products.categories.create')}}" class="btn btn-primary">{{__('Add Category')}}</a>
            <!--end::Add customer-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-250px">{{__('Category')}}</th>
                    <th class="min-w-150px">{{__('Category Type')}}</th>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/68.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Computers</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Our computers and tablets include all the big brands.</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">Automated</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/71.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Watches</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Our range of watches are perfect whether you’re looking to upgrade</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">Automated</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/58.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Headphones</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Our big range of headphones makes it easy to upgrade your device at a great price.</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Manual</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/52.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Footwear</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Whatever your activity needs are, we’ve got you covered.</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">Automated</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/76.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Cameras</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">You’ll find exactly what you’re looking for with our huge range of cameras.</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Manual</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/207.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Shirts</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Any occasion, any time, we have everything you'll ever need.</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">Automated</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/50.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Household</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Spice up your home decor with our wide selection.</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Manual</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/193.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Toys</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Get the perfect gift for the little ones.</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">Automated</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/169.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Handbags</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Great fashion, great selections, great prices</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-primary">Manual</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/177.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Wines</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">Great taste, great selections, great prices</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">Automated</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
                        <div class="d-flex">
                            <!--begin::Thumbnail-->
                            <a href="#edit-category.html" class="symbol symbol-50px">
                                <span class="symbol-label" style="background-image:url({{asset(theme()->getMediaUrlPath() . 'stock/ecommerce/151.gif')}})"></span>
                            </a>
                            <!--end::Thumbnail-->
                            <div class="ms-5">
                                <!--begin::Title-->
                                <a href="#edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Sandals</a>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7 fw-bolder">In season summer footwear with a huge range of options</div>
                                <!--end::Description-->
                            </div>
                        </div>
                    </td>
                    <!--end::Category=-->
                    <!--begin::Type=-->
                    <td>
                        <!--begin::Badges-->
                        <div class="badge badge-light-success">Automated</div>
                        <!--end::Badges-->
                    </td>
                    <!--end::Type=-->
                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#add-category.html" class="menu-link px-3">Edit</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
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
<!--end::Category-->
</x-base-layout>
