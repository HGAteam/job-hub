<x-base-layout>
    <!--begin::Row-->
    <div id="rolesContainer" class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
        <!--begin::Add new card-->
        <div class="col-lg-4">
            <!--begin::Card-->
            <div class="card h-md-100">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center">
                    <!--begin::Button-->
                    <button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_role">
                        <!--begin::Illustration-->
                        <img src="{{ asset(theme()->getMediaUrlPath() . 'illustrations/sketchy-1/4.png') }}"
                            alt="" class="mw-100 mh-150px mb-7" />
                        <!--end::Illustration-->
                        <!--begin::Label-->
                        <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                        <!--end::Label-->
                    </button>
                    <!--begin::Button-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--begin::Add new card-->
    </div>
    <!--end::Row-->
    <!--begin::Modals-->
    <!--begin::Modal - Add role-->
    <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">{{ __('Add a Role') }}</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr061.svg', 'svg-icon svg-icon-1') !!}
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-lg-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_add_role_form" class="form" action="#">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header"
                            data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">
                                    <span class="required">{{ __('Role name') }}</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="Enter a role name"
                                    name="role_name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Permissions-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">{{ __('Role Permissions') }}</label>
                                <!--end::Label-->
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-semibold">
                                            <!--begin::Table row-->
                                            <tr>
                                                <td class="text-gray-800">Administrator Access
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Allows a full access to the system"></i>
                                                </td>
                                                <td>
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-9">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="kt_roles_select_all" />
                                                        <span class="form-check-label" for="kt_roles_select_all">{{__('Select all')}}</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </td>
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">User Management</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="user_management_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="user_management_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="user_management_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ __('Content Management') }}</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="content_management_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="content_management_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="content_management_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ __('Financial Management') }}</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="financial_management_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="financial_management_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="financial_management_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ __('Reporting') }}</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="reporting_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="reporting_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="reporting_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ __('Payroll') }}</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="payroll_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="payroll_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="payroll_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ __('Disputes Management') }}</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="disputes_management_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="disputes_management_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="disputes_management_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ __('API Controls') }}</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="api_controls_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="api_controls_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="api_controls_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ __('Database Management') }}</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="database_management_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="database_management_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="database_management_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ __('Repository Management') }}</td>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="repository_management_read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="repository_management_write" />
                                                            <span class="form-check-label">{{ __('Write') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="repository_management_create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Options-->
                                            </tr>
                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                data-kt-roles-modal-action="cancel">{{__('Discard')}}</button>
                            <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                                <span class="indicator-label">{{__('Submit')}}</span>
                                <span class="indicator-progress">{{__('Please wait')}}...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add role-->
    <!--begin::Modal - Update role-->
    <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-850px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">{{ __('Update Role') }}</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr061.svg', 'svg-icon svg-icon-1') !!}
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_update_role_form" class="form" action="#">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_modal_update_role_header"
                            data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">
                                    <span class="required">{{ __('Role name') }}</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="{{__('Enter a role name')}}"
                                    name="role_name" value="Developer" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Permissions-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">{{ __('Role Permissions') }}</label>
                                <!--end::Label-->
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-semibold">
                                            <!--begin::Table row-->
                                            <tr>
                                                <td class="text-gray-800">{{ __('Administrator Access') }}
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Allows a full access to the system"></i>
                                                </td>
                                                <td>
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="kt_roles_select_all" />
                                                        <span class="form-check-label"
                                                            for="kt_roles_select_all">{{ __('Select all') }}</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </td>
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">"Nombre de permiso sin repetir"</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="Create" name="create" />
                                                            <span class="form-check-label">{{ __('Create') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="Read" name="read" />
                                                            <span class="form-check-label">{{ __('Read') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="Update" name="update" />
                                                            <span class="form-check-label">{{ __('Update') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="Delete" name="Delete" />
                                                            <span class="form-check-label">{{ __('Delete') }}</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                data-kt-roles-modal-action="cancel">{{ __('Discard') }}</button>
                            <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                                <span class="indicator-label">{{ __('Submit') }}</span>
                                <span class="indicator-progress">{{ __('Please wait') }}...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Update role-->
    <!--end::Modals-->
    @section('scripts')
    @endsection
</x-base-layout>
