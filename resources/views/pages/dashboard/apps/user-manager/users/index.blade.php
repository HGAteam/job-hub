<x-base-layout>
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">

                    {!! theme()->getSvgIcon('icons/duotune/general/gen021.svg', 'svg-icon svg-icon-1 position-absolute ms-5') !!}

                    <input type="text" data-kt-user-table-filter="search"
                        class="form-control form-control-solid w-250px ps-13" placeholder="{{__('Search user')}}" />
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>{{ __('Filter') }}</button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">{{ __('Filter Options') }}</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Separator-->
                        <!--begin::Content-->
                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">{{ __('Role') }}:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                    data-placeholder="{{ __('Select option') }}" data-allow-clear="true"
                                    data-kt-user-table-filter="role" data-hide-search="true">
                                    <option></option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role->name}}">{{__($role->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">{{ __('Two Step Verification') }}:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                    data-placeholder="{{ __('Select option') }}" data-allow-clear="true"
                                    data-kt-user-table-filter="two-step" data-hide-search="true">
                                    <option></option>
                                    <option value="Enabled">{{ __('Enabled') }}</option>
                                    <option value="Disabled">{{ __('Disabled') }}</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                    data-kt-menu-dismiss="true"
                                    data-kt-user-table-filter="reset">{{ __('Reset') }}</button>
                                <button type="submit" class="btn btn-primary fw-semibold px-6"
                                    data-kt-menu-dismiss="true"
                                    data-kt-user-table-filter="filter">{{ __('Apply') }}</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Filter-->
                    <!--begin::Export-->
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_export_users">
                        <i class="ki-duotone ki-exit-up fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>{{ __('Export') }}</button>
                    <!--end::Export-->
                    @hasrole(['Administrator'])
                        <!--begin::Add user-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_add_user">
                            <i class="ki-duotone ki-plus fs-2"></i>{{ __('Add User') }}</button>
                        <!--end::Add user-->
                    @endhasrole
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span>{{ __('Selected') }}
                    </div>
                    <button type="button" class="btn btn-danger"
                        data-kt-user-table-select="delete_selected">{{ __('Delete Selected') }}</button>
                </div>
                <!--end::Group actions-->
                @hasrole(['Administrator'])
                <!--begin::Modal - Export Users-->
                <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">{{ __('Export Users') }}</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-kt-users-modal-action="close">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_export_users_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label
                                            class="fs-6 fw-semibold form-label mb-2">{{ __('Select Roles') }}:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="role" data-control="select2"
                                            data-placeholder="{{ __('Select a role') }}" data-hide-search="true"
                                            class="form-select form-select-solid fw-bold">
                                            <option></option>
                                            @foreach ($roles as $role)
                                            <option value="{{$role->name}}">{{__($role->name)}}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Select Export
                                            Format:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="format" data-control="select2"
                                            data-placeholder="Select a format" data-hide-search="true"
                                            class="form-select form-select-solid fw-bold">
                                            <option></option>
                                            <option value="excel">Excel</option>
                                            <option value="pdf">PDF</option>
                                            <option value="cvs">CVS</option>
                                            <option value="zip">ZIP</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">{{__('Discard')}}</button>
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">{{__('Submit')}}</span>
                                            <span class="indicator-progress">{{__('Please wait')}}...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                <!--end::Modal - Export Users-->
                @endhasrole

                @hasrole(['Administrator'])
                <!--begin::Modal - Add User-->
                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_user_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Add User</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-kt-users-modal-action="close">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_add_user_form" class="form" action="{{route('user-manager.store')}}">
                                    <!--begin::Scroll-->
                                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                        data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                        data-kt-scroll-offset="300px">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                                            <!--end::Label-->
                                            <!--begin::Image placeholder-->
                                            <style>
                                                /* Aquí estamos utilizando un atributo data-* para almacenar la ruta de la imagen */
                                                .image-input-placeholder {
                                                    background-image: url('blank-image.svg'); /* Fallback para navegadores que no soportan data-* */
                                                    background-image: url('{{ asset(theme()->getMediaUrlPath() . 'svg/files/blank-image.svg') }}');
                                                }

                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                    background-image: url('blank-image-dark.svg'); /* Fallback para navegadores que no soportan data-* */
                                                    background-image: url('{{ asset(theme()->getMediaUrlPath() . 'svg/files/blank-image-dark.svg') }}');
                                                }
                                            </style>
                                            <!--end::Image placeholder-->
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline image-input-placeholder"
                                                data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url( {{asset(theme()->getMediaUrlPath() . 'svg/files/blank-image.svg')}});">
                                                </div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="{{__('Change avatar')}}">
                                                    <i class="ki-duotone ki-pencil fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="{{__('Remove avatar')}}">
                                                    <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">{{__('Allowed file types')}}: png, jpg, jpeg. {{__('maximum recommended size')}} 200x200</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Name(s) & Last Name(s) -->
                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 col-lg-6 col-md-6">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2">{{__('Name(s)')}}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Name(s)" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 col-lg-6 col-md-6">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2">{{__('Last name(s)')}}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="last_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Last name(s)" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Name(s) & Last Name(s) -->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">{{__('Email')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">{{__('Password')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Separator-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--end::Separator-->

                                        <!--begin::Phone & Mobile -->
                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 col-lg-6 col-md-6">
                                                <!--begin::Label-->
                                                <label class="fw-semibold fs-6 mb-2">{{__('Phone')}}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="phone" name="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="+54381312345678" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 col-lg-6 col-md-6">
                                                <!--begin::Label-->
                                                <label class="fw-semibold fs-6 mb-2">{{__('Mobile')}}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="phone" name="mobile" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="+54381312345678" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                         <!--begin::Input group-->
                                         <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fw-semibold fs-6 mb-2">{{__('Address')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Country, State-Province, Address complete" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Phone & Mobile -->

                                        <!--begin::Separator-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--end::Separator-->

                                        <!--begin::Input group-->
                                        <div class="mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-5">{{__('Role')}}</label>
                                            <!--end::Label-->
                                            <!--begin::Roles-->
                                            @foreach ($roles as $key => $role)
                                            <!--begin::Input row-->
                                            <div class="d-flex fv-row">
                                                <!--begin::Radio-->
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input me-3" name="user_role"
                                                        type="radio" value="{{$role->name}}"
                                                        id="kt_modal_update_role_option_{{$role->id}}" @if($key+1 === 1) checked='checked'@endif />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <label class="form-check-label"
                                                        for="kt_modal_update_role_option_{{$role->id}}">
                                                        <div class="fw-bold text-gray-800">{{$role->name}}</div>
                                                        <div class="text-gray-600">{{$role->description}}</div>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Radio-->
                                            </div>
                                            <!--end::Input row-->
                                            @if (count($roles) > $key+1)
                                            <div class='separator separator-dashed my-5'></div>
                                            @endif
                                            @endforeach
                                            <!--end::Roles-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Scroll-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3"
                                            data-kt-users-modal-action="cancel">{{__('Discard')}}</button>
                                        <button type="submit" class="btn btn-primary"
                                            data-kt-users-modal-action="submit">
                                            <span class="indicator-label">{{__('Submit')}}</span>
                                            <span class="indicator-progress">{{__('Please wait')}}...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
                <!--end::Modal - Add User-->
                @endhasrole
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-125px">{{ __('User') }}</th>
                        <th class="min-w-125px">{{ __('Role') }}</th>
                        <th class="min-w-125px">{{ __('Last login') }}</th>
                        <th class="min-w-125px">{{ __('Two-step') }}</th>
                        <th class="min-w-125px">{{ __('Joined Date') }}</th>
                        <th class="text-end min-w-100px">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</x-base-layout>
