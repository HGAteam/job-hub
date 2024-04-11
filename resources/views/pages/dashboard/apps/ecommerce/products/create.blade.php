<x-base-layout>
	<!--begin::Form-->
    <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="#products.html">
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>{{__('Thumbnail')}}</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url({{asset(theme()->getMediaUrlPath() . 'svg/files/blank-image.svg')}})">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="{{__('Change avatar')}}">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="{{__('Cancel avatar')}}">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="{{__('Remove avatar')}}">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">{{__('Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted')}}</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Thumbnail settings-->
            <!--begin::Status-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>{{__('Status')}}</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                    </div>
                    <!--begin::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Select2-->
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="{{__('Select an option')}}" id="kt_ecommerce_add_product_status_select">
                        <option></option>
                        <option value="published" selected="selected">{{__('Published')}}</option>
                        <option value="draft">{{__('Draft')}}</option>
                        <option value="scheduled">{{__('Scheduled')}}</option>
                        <option value="inactive">{{__('Inactive')}}</option>
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">{{__('Set the product status')}}.</div>
                    <!--end::Description-->
                    <!--begin::Datepicker-->
                    <div class="d-none mt-10">
                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">{{__('Select publishing date and time')}}</label>
                        <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="{{__('Pick date')}} &amp; time" />
                    </div>
                    <!--end::Datepicker-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Status-->
            <!--begin::Category & tags-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>{{__('Product Details')}}</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="form-label">{{__('Categories')}}</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select class="form-select mb-2" data-control="select2" data-placeholder="{{__('Select an option')}}" data-allow-clear="true" multiple="multiple">
                        <option></option>
                        <option value="Computers">{{__('Computers')}}</option>
                        <option value="Watches">{{__('Watches')}}</option>
                        <option value="Headphones">{{__('Headphones')}}</option>
                        <option value="Footwear">{{__('Footwear')}}</option>
                        <option value="Cameras">{{__('Cameras')}}</option>
                        <option value="Shirts">{{__('Shirts')}}</option>
                        <option value="Household">{{__('Household')}}</option>
                        <option value="Handbags">{{__('Handbags')}}</option>
                        <option value="Wines">{{__('Wines')}}</option>
                        <option value="Sandals">{{__('Sandals')}}</option>
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7 mb-7">{{__('Add product to a category')}}.</div>
                    <!--end::Description-->
                    <!--end::Input group-->
                    <!--begin::Button-->
                    <a href="#add-category.html" class="btn btn-light-primary btn-sm mb-10">
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr087.svg','svg-icon svg-icon-2') !!}
                        {{__('Create new category')}}
                    </a>
                    <!--end::Button-->
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="form-label d-block">{{__('Tags')}}</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">{{__('Add tags to a product')}}.</div>
                    <!--end::Description-->
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category & tags-->
            <!--begin::Weekly sales-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>{{__('Weekly Sales')}}</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <span class="text-muted">{{__('No data available. Sales data will begin capturing once product has been published')}}.</span>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Weekly sales-->
            <!--begin::Template settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>{{__('Product Template')}}</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Select store template-->
                    <label for="kt_ecommerce_add_product_store_template" class="form-label">{{__('Select a product template')}}</label>
                    <!--end::Select store template-->
                    <!--begin::Select2-->
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="{{__('Select an option')}}" id="kt_ecommerce_add_product_store_template">
                        <option></option>
                        <option value="default" selected="selected">{{__('Default template')}}</option>
                        <option value="electronics">{{__('Electronics')}}</option>
                        <option value="office">{{__('Office stationary')}}</option>
                        <option value="fashion">{{__('Fashion')}}</option>
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">{{__('Assign a template from your current theme to define how a single product is displayed')}}.</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Template settings-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">{{__('General')}}</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">{{__('Advanced')}}</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__('General')}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__('Product Name')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="product_name" class="form-control mb-2" placeholder="{{__('Product name')}}" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('A product name is required and recommended to be unique')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">{{__('Description')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Set a description to the product for better visibility')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::Media-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__('Media')}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row mb-2">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="kt_ecommerce_add_product_media">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{__('Drop files here or click to upload')}}.</h3>
                                                <span class="fs-7 fw-bold text-gray-400">{{__('Upload up to 10 files')}}</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">{{__('Set the product media gallery')}}.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Media-->
                        <!--begin::Pricing-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__('Pricing')}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__('Base Price')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Set the product price')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">{{__('Discount Type')}}
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{__('Select a discount type that will be applied to this product')}}"></i></label>
                                    <!--End::Label-->
                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option" value="1" checked="checked" />
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder text-gray-800 d-block">{{__('No Discount')}}</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option" value="2" />
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder text-gray-800 d-block">{{__('Percentage %')}}</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option" value="3" />
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bolder text-gray-800 d-block">{{__('Fixed Price')}}</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                    <!--begin::Label-->
                                    <label class="form-label">{{__('Set Discount Percentage')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center mb-5">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bolder fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                            <span class="fw-bolder fs-4 mt-1 ms-2">%</span>
                                        </div>
                                        <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                    </div>
                                    <!--end::Slider-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Set a percentage discount to be applied on this product')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                    <!--begin::Label-->
                                    <label class="form-label">{{__('Fixed Discounted Price')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="{{__('Discounted price')}}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Set the discounted product price. The product will be reduced at the determined fixed price')}}</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Tax-->
                                <div class="d-flex flex-wrap gap-5">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="required form-label">{{__('Tax Class')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="{{__('Select an option')}}">
                                            <option></option>
                                            <option value="0">{{__('Tax Free')}}</option>
                                            <option value="1">{{__('Taxable Goods')}}</option>
                                            <option value="2">{{__('Downloadable Product')}}</option>
                                        </select>
                                        <!--end::Select2-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">{{__('Set the product tax class')}}.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">{{__('VAT Amount (%)')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control mb-2" value="" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">{{__('Set the product VAT about')}}.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end:Tax-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Pricing-->
                    </div>
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::Inventory-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__('Inventory')}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__('SKU')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Enter the product SKU')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__('Barcode')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sku" class="form-control mb-2" placeholder="{{__('Barcode Number')}}" value="" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Enter the product barcode number')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">{{__('Quantity')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="d-flex gap-3">
                                        <input type="number" name="shelf" class="form-control mb-2" placeholder="{{__('On shelf')}}" value="" />
                                        <input type="number" name="warehouse" class="form-control mb-2" placeholder="{{__('In warehouse')}}" />
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Enter the product quantity')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">{{__('Allow Backorders')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <label class="form-check-label">{{__('Yes')}}</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Allow customers to purchase products that are out of stock')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Inventory-->
                        <!--begin::Variations-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__('Variations')}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                    <!--begin::Label-->
                                    <label class="form-label">{{__('Add Product Variations')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Repeater-->
                                    <div id="kt_ecommerce_add_product_options">
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                                    <!--begin::Select2-->
                                                    <div class="w-100 w-md-200px">
                                                        <select class="form-select" name="product_option" data-placeholder="{{__('Select a variation')}}" data-kt-ecommerce-catalog-add-product="product_option">
                                                            <option></option>
                                                            <option value="color">{{__('Color')}}</option>
                                                            <option value="size">{{__('Size')}}</option>
                                                            <option value="material">{{__('Material')}}</option>
                                                            <option value="style">{{__('Style')}}</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Select2-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="{{__('Variation')}}" />
                                                    <!--end::Input-->
                                                    <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr088.svg','svg-icon svg-icon-2') !!}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group mt-5">
                                            <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                            {!! theme()->getSvgIcon('icons/duotune/arrows/arr087.svg','svg-icon svg-icon-2') !!}
                                           {{__('Add another variation')}}</button>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Variations-->
                        <!--begin::Shipping-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__('Shipping')}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Input-->
                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" />
                                        <label class="form-check-label">{{__('This is a physical product')}}</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Set if the product is a physical or digital item. Physical products may require shipping')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Shipping form-->
                                <div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">{{__('Weight')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <input type="text" name="weight" class="form-control mb-2" placeholder="{{__('Product weight')}}" value="" />
                                        <!--end::Editor-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">{{__('Set a product weight in kilograms (kg)')}}.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">{{__('Dimension')}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                            <input type="number" name="width" class="form-control mb-2" placeholder="{{__('Width (w)')}}" value="" />
                                            <input type="number" name="height" class="form-control mb-2" placeholder="{{__('Height (h)')}}" value="" />
                                            <input type="number" name="length" class="form-control mb-2" placeholder="{{__('Lengtn (l)')}}" value="" />
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">{{__('Enter the product dimensions in centimeters (cm)')}}.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Shipping form-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Shipping-->
                        <!--begin::Meta options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{__('Meta Options')}}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">{{__('Meta Tag Title')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" name="meta_title" placeholder="{{__('Meta tag name')}}" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Set a meta tag title. Recommended to be simple and precise keywords')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">{{__('Meta Tag Description')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Set a meta tag description to the product for increased SEO ranking')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">{{__('Meta Tag Keywords')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" />
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">{{__('Set a list of keywords that the product is related to. Separate the keywords by adding a comma')}}
                                    <code>,</code>{{__('between each keyword')}}.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Meta options-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="#products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">{{__('Cancel')}}</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                    <span class="indicator-label">{{__('Save Changes')}}</span>
                    <span class="indicator-progress">{{__('Please wait')}}...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>
    <!--end::Form-->
</x-base-layout>
