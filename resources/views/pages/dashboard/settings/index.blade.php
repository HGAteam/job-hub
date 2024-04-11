<x-base-layout>
    <div class="row">
        <div class="col-sm-12 col-lg-12">

            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card body-->
                <div class="card-body pt-7">
                    <!--begin::Form-->
                    <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                        <!--begin::Input group Branches-->
                        <div class="row fv-row mb-7">
                            <div class="col-md-3 text-md-end">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3">
                                    <span>{{ __('Branch') }}</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="{{ __('Select the number of branches you own') }}."></i>
                                </label>
                                <!--end::Label-->
                            </div>
                            <div class="col-md-3">
                                <div class="w-100">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid" name="branchs" data-control="select2"
                                        data-hide-search="true" data-placeholder="{{ __('Select Branchs') }}">
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
                        <!--end::Input group Branches-->
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
                                    <select class="form-select form-select-solid" name="boxes" data-control="select2"
                                        data-hide-search="true" data-placeholder="{{ __('Select Branchs') }}">
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
                                            name="online_payments" id="online_payments_yes"
                                            checked="checked" />
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
    </div>
</x-base-layout>
