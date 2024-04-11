<!--begin::Basic info-->
<div class="card {{ $class }}">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('Profile Details') }}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->

    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form" method="POST"
            action="{{ route('user-manager.update', ['slug' => $user->slug]) }}" enctype="multipart/form-data">
            @csrf
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('Avatar') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline {{ isset($info) && $info->avatar ? '' : 'image-input-empty' }}"
                            data-kt-image-input="true"
                            style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: {{ isset($info) && $info->avatar ? 'url(' . asset($info->avatar) . ')' : 'none' }};background-position:center center;">
                            </div>
                            <!--end::Preview existing avatar-->

                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                title="{{ __('Change avatar') }}">
                                <i class="bi bi-pencil-fill fs-7"></i>

                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                title="{{ __('Cancel avatar') }}">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                title="{{ __('Remove avatar') }}">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->

                        <!--begin::Hint-->
                        <div class="form-text">{{ __('Allowed file types') }}: png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{ __('Email') }}</span>
                    </label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="email" name="email" class="form-control form-control-lg form-control-solid"
                            placeholder="{{ __('Email') }}" value="{{ old('email', $info->user->email ?? '') }}" />
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('Full Name') }}</label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="first_name"
                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                    placeholder="{{ __('First name') }}"
                                    value="{{ old('first_name', $user->first_name ?? '') }}" />
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="last_name"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="{{ __('Last name') }}"
                                    value="{{ old('last_name', $user->last_name ?? '') }}" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{ __('Contact Phone') }}</span>

                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                            title="{{ __('Phone number must be active') }}"></i>
                    </label>
                    <!--end::Label-->

                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="tel" name="phone" class="form-control form-control-lg form-control-solid"
                            placeholder="{{ __('Phone number') }}" value="{{ old('phone', $info->phone ?? '') }}" />
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{ __('Role') }}</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <!--begin::Roles-->
                        <select
                            class="form-control form-control-sm form-control-solid @error('role') is-invalid @enderror"
                            name="role" id="role">
                            @php
                                if (
                                    auth()
                                        ->user()
                                        ->hasRole('System Admin')
                                ) {
                                    $roles = \Spatie\Permission\Models\Role::all();
                                } elseif (
                                    auth()
                                        ->user()
                                        ->hasRole('Administrator')
                                ) {
                                    $roles = \Spatie\Permission\Models\Role::where('name', '!=', 'System Admin')->get();
                                } else {
                                    $roles = \Spatie\Permission\Models\Role::where('name', '!=', 'Administrator')
                                        ->where('name', '!=', 'System Admin')
                                        ->get();
                                }
                            @endphp
                            @foreach ($roles as $key => $item)
                                <option value="{{ $item->name }}"
                                    {{ old('role', $item->name) === $info->user->role->name ? 'selected' : '' }}>
                                    {{ __($item->name) }}</option>
                            @endforeach
                        </select>
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <!--end::Roles-->
                    </div>
                    <!--end::Input group-->

                </div>
                <!--end::Card body-->

                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="button" class="btn btn-white btn-secondary me-2">{{ __('Reset Password') }}</button>

                    <button type="reset" class="btn btn-lg btn-light-danger me-2">{{ __('Discard') }}</button>

                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                        @include('partials.general._button-indicator', ['label' => __('Save Changes')])
                    </button>
                </div>
                <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->
