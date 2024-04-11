<x-base-layout>
    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-15">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                    href="#kt_ecommerce_settings_general">
                    {!! theme()->getSvgIcon('icons/duotune/general/gen001.svg', 'svg-icon svg-icon-2 me-2') !!}
                    {{ __('General') }}
                </a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
                    {!! theme()->getSvgIcon('icons/duotune/ecommerce/ecm004.svg', 'svg-icon svg-icon-2 me-2') !!}
                    {{ __('Store Info') }}
                </a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                    href="#kt_ecommerce_settings_localization">
                    {!! theme()->getSvgIcon('icons/duotune/coding/cod009.svg', 'svg-icon svg-icon-2 me-2') !!}
                    {{ __('Store Settings') }}
                </a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                    href="#kt_ecommerce_settings_products">
                    {!! theme()->getSvgIcon('icons/duotune/ecommerce/ecm005.svg', 'svg-icon svg-icon-2 me-2') !!}
                    {{ __('Products') }}
                </a>
            </li>
            <!--end:::Tab item-->
            <!--begin:::Tab item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                    href="#kt_ecommerce_settings_customers">
                    {!! theme()->getSvgIcon('icons/duotune/communication/com014.svg', 'svg-icon svg-icon-2 me-2') !!}
                    {{ __('Customers') }}
                </a>
            </li>
            <!--end:::Tab item-->
        </ul>
        <!--end:::Tabs-->
        <!--begin:::Tab content-->
        <div class="tab-content" id="myTabContent">
            <!--begin:::Tab pane General-->
            <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Title-->
                            <h2>{{ __('General') }}</h2>
                            <!--end::Title-->
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Form-->
                        <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                            <!--begin::Input group Subsidiaries-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Subsidiaries') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Select the number of subsidiaries you own') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-3">
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" name="subsidiaries"
                                            data-control="select2" data-hide-search="true"
                                            data-placeholder="{{ __('Select Subsidiaries') }}">
                                            <option></option>
                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6" disabled>6</option>
                                            <option value="7" disabled>7</option>
                                            <option value="8" disabled>8</option>
                                            <option value="9" disabled>9</option>
                                            <option value="10" disabled>10</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group Subsidiaries-->
                            <!--begin::Input group Boxes-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Boxes') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Insert the total number of boxes') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-3">
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid" name="boxes"
                                            data-control="select2" data-hide-search="true"
                                            data-placeholder="{{ __('Select Branchs') }}">
                                            <option></option>
                                            <option value="1" selected="selected">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9" disabled>9</option>
                                            <option value="10" disabled>10</option>
                                            <option value="11" disabled>11</option>
                                            <option value="12" disabled>12</option>
                                            <option value="13" disabled>13</option>
                                            <option value="14" disabled>14</option>
                                            <option value="15" disabled>15</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group Boxes-->
                            <!--begin::Input group Employees-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Employees') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Insert the total number of employees to give access to create') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-3">
                                    <div class="w-100">
                                        <!--begin::Input-->
                                        <input type="number" class="form-control form-control-solid" name="employees"
                                            value="" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            <!--begin::Input group Online Payments-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Online Payments') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('If this option is enabled, online payment gateways will be provided that you can use for both ecommerce and POS sites') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="online_payments" id="online_payments_yes" checked="checked" />
                                            <label class="form-check-label"
                                                for="online_payments_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="online_payments" id="online_payments_no" />
                                            <label class="form-check-label"
                                                for="online_payments_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group Online Payments-->
                            <!--begin::Action buttons-->
                            <div class="row">
                                <div class="col-md-9 offset-md-3">
                                    <!--begin::Separator-->
                                    <div class="separator mb-6"></div>
                                    <!--end::Separator-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                            class="btn btn-light me-3">{{ __('Cancel') }}</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" data-kt-ecommerce-settings-type="submit"
                                            class="btn btn-primary">
                                            <span class="indicator-label">{{ __('Save') }}</span>
                                            <span class="indicator-progress">{{ __('Please wait') }}...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Action buttons-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end:::Tab pane General-->
            <!--begin:::Tab pane Store Info-->
            <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Title-->
                            <h2>{{ __('Store Info') }}</h2>
                            <!--end::Title-->
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Form-->
                        <form id="kt_ecommerce_settings_general_store" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Store Name') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Set the name of the store') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="store_name"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Store Owner') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __("Set the store owner's name") }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="store_owner"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Address') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __("Set the store's full address") }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" name="store_address"></textarea>
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Geocode') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Enter the store geocode manually (optional)') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        name="store_geocode" value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Email') }}</span>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" name="store_email"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Phone') }}</span>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="store_phone"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Mobile') }}</span>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="store_mobile"
                                        value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Action buttons-->
                            <div class="row">
                                <div class="col-md-9 offset-md-3">
                                    <!--begin::Separator-->
                                    <div class="separator mb-6"></div>
                                    <!--end::Separator-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                            class="btn btn-light me-3">{{ __('Cancel') }}</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" data-kt-ecommerce-settings-type="submit"
                                            class="btn btn-primary">
                                            <span class="indicator-label">{{ __('Save') }}</span>
                                            <span class="indicator-progress">{{ __('Please wait') }}...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Action buttons-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end:::Tab pane Store Info-->
            <!--begin:::Tab pane Store Settings-->
            <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Title-->
                            <h2>{{ __('Store Settings') }}</h2>
                            <!--end::Title-->
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Form-->
                        <form id="kt_ecommerce_settings_general_localization" class="form" action="#">
                            <!--begin::Input group Serial number-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3 mb-0 pb-0">
                                        <span class="required">{{ __('Serial number') }}</span>
                                    </label>
                                    <!--end::Label--><br>
                                    <small
                                        class="text-muted pt-0 mt-0 mx-0">{{ __('Sequence of the series and correlative') }}</small>
                                </div>
                                <div class="col-md-9">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="row g-9 mb-7">
                                            <!--begin::Col-->
                                            <div class="col-md-3 fv-row">
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="serie" value="001" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder=""
                                                    name="correlative" value="0000001" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group Serial number-->
                            <!--begin::Input group Denominations-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3 mb-0 pb-0">
                                        <span class="required">{{ __('Denominations') }}</span>
                                    </label><br>
                                    <small
                                        class="text-muted pt-0 mt-0 mx-0">{{ __('Coins and bills by denomination for cash count') }}</small>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="w-100">
                                        <textarea class="form-control form-control-solid" name="denominations" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group Denominations-->
                            <!--begin::Input group Brands-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3 pb-0 mb-0">
                                        <span class="required">{{ __('Brands') }}</span>
                                    </label><br>
                                    <!--end::Label-->
                                    <small
                                        class="text-muted pt-0 mt-0 mx-0">{{ __('List of trademarks, used to register the products') }}</small>
                                </div>
                                <div class="col-md-9">
                                    <div class="w-100">
                                        <textarea class="form-control form-control-solid" name="brands" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group Brands-->
                            <!--begin::Input group Presentations-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3 pb-0 mb-0">
                                        <span class="required">{{ __('Presentations') }}</span>
                                    </label><br>
                                    <!--end::Label-->
                                    <small
                                        class="text-muted pt-0 mt-0 mx-0">{{ __('List of presentations, to define the product unit') }}</small>
                                </div>
                                <div class="col-md-9">
                                    <div class="w-100">
                                        <textarea class="form-control form-control-solid" name="presentations" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group Presentations-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end:::Tab pane Store Settings-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">
                <!--begin::Products-->
                <div class="card card-flush mb-5 mb-xl-8">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Title-->
                            <h2>{{ __('Categories') }}</h2>
                            <!--end::Title-->
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Form-->
                        <form id="kt_ecommerce_settings_general_products" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Category Product Count') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="category_product_count" id="category_product_count_yes"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="category_product_count_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="category_product_count" id="category_product_count_no" />
                                            <label class="form-check-label"
                                                for="category_product_count_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Default Items Per Page') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Determines how many items are shown per page') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        name="products_items_per_page" value="10" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <div class="separator my-5"></div>
                            <h2 class="mb-5">{{ __('Reviews') }}</h2>
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Allow Reviews') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Enable/disable review entries for registered customers') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="allow_reviews" id="allow_reviews_yes" checked="checked" />
                                            <label class="form-check-label"
                                                for="allow_reviews_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="allow_reviews" id="allow_reviews_no" />
                                            <label class="form-check-label"
                                                for="allow_reviews_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Allow Guest Reviews') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Enable/disable review entries for public guest customers') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="allow_guest_reviews" id="allow_guest_reviews_yes" />
                                            <label class="form-check-label"
                                                for="allow_guest_reviews_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="allow_guest_reviews" id="allow_guest_reviews_no"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="allow_guest_reviews_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <div class="separator my-5"></div>
                            <h2 class="mb-5">{{ __('Vouchers') }}</h2>
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Minimum Vouchers') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Minimum number of vouchers customers can attach to an order') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        name="products_min_voucher" value="1" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Maximum Vouchers') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Maximum number of vouchers customers can attach to an order') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        name="products_max_voucher" value="10" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <div class="separator my-5"></div>
                            <h2 class="mb-5">{{ __('Tax') }}</h2>
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Display Prices with Tax') }}</span>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="product_tax" id="product_tax_yes" checked="checked" />
                                            <label class="form-check-label"
                                                for="product_tax_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="product_tax" id="product_tax_no" />
                                            <label class="form-check-label"
                                                for="product_tax_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Default Tax Rate') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Determines the tax percentage (%) applied to orders') }}"></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        name="products_tax_rate" value="15%" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Action buttons-->
                            <div class="row">
                                <div class="col-md-9 offset-md-3">
                                    <!--begin::Separator-->
                                    <div class="separator mb-6"></div>
                                    <!--end::Separator-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                            class="btn btn-light me-3">{{ __('Cancel') }}</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" data-kt-ecommerce-settings-type="submit"
                                            class="btn btn-primary">
                                            <span class="indicator-label">{{ __('Save') }}</span>
                                            <span class="indicator-progress">{{ __('Please wait') }}...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Action buttons-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end:::Tab pane-->
            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Title-->
                            <h2>{{ __('Customers') }}</h2>
                            <!--end::Title-->
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Form-->
                        <form id="kt_ecommerce_settings_general_customers" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Customers Online') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Enable/disable tracking customers online status') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_online" id="customers_online_yes"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="customers_online_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_online" id="customers_online_no" />
                                            <label class="form-check-label"
                                                for="customers_online_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Customers Activity') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Enable/disable tracking customers activity') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_activity" id="customers_activity_yes"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="customers_activity_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_activity" id="customers_activity_no" />
                                            <label class="form-check-label"
                                                for="customers_activity_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Customer Searches') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Enable/disable logging customers search keywords') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_searches" id="customers_searches_yes"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="customers_searches_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_searches" id="customers_searches_no" />
                                            <label class="form-check-label"
                                                for="customers_searches_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Allow Guest Checkout') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Enable/disable guest customers to checkout') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_guest_checkout" id="customers_guest_checkout_yes" />
                                            <label class="form-check-label"
                                                for="customers_guest_checkout_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_guest_checkout" id="customers_guest_checkout_no"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="customers_guest_checkout_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>{{ __('Login Display Prices') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Only show prices when customers log in') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex mt-3">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_login_prices" id="customers_login_prices_yes" />
                                            <label class="form-check-label"
                                                for="customers_login_prices_yes">{{ __('Yes') }}</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" value=""
                                                name="customers_login_prices" id="customers_login_prices_no"
                                                checked="checked" />
                                            <label class="form-check-label"
                                                for="customers_login_prices_no">{{ __('No') }}</label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <div class="col-md-3 text-md-end">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">{{ __('Max Login Attempts') }}</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="{{ __('Set the max number of login attempts before the customer account is locked for 1 hour') }}."></i>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <div class="col-md-9">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        name="customer_login_attempts" value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Action buttons-->
                            <div class="row">
                                <div class="col-md-9 offset-md-3">
                                    <!--begin::Separator-->
                                    <div class="separator mb-6"></div>
                                    <!--end::Separator-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                            class="btn btn-light me-3">{{ __('Cancel') }}</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" data-kt-ecommerce-settings-type="submit"
                                            class="btn btn-primary">
                                            <span class="indicator-label">{{ __('Save') }}</span>
                                            <span class="indicator-progress">{{ __('Please wait') }}...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Action buttons-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end:::Tab pane-->
        </div>
        <!--end:::Tab content-->
    </div>
    <!--end::Content-->
</x-base-layout>
