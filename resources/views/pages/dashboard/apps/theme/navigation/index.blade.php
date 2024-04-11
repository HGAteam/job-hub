<x-base-layout>
    @section('styles')
        <link href="{{ asset('dashboard/plugins/custom/jkanban/jkanban.bundle.css') }}" rel="stylesheet" type="text/css" />
    @endsection

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4">
            <!--begin::Engage widget 1-->
            <div class="card">
                <div class="card-header my-0 py-0 border-bottom-0">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column my-0 py-0">
                        <span class="card-label fw-bold text-dark">{{ __('Create new menu item') }}</span>
                    </h3>
                    <!--end::Title-->
                </div>
                <!--begin::Body-->
                <div class="card-body d-flex flex-column flex-center my-0 py-0">
                    <form action="">
                        <div class="row">
                            <div class="fv-row col-lg-12 mb-5">
                                <label for="exampleFormControlInput1"
                                    class="required form-label">{{ __('Nav item name') }}</label>
                                <input type="text" class="form-control form-control-sm form-control-solid"
                                    placeholder="Nav item name" />
                            </div>
                            <div class="fv-row col-lg-12 mb-5">
                                <label for="exampleFormControlInput1"
                                    class="required form-label">{{ __('Nav item url') }}</label>
                                <input type="url" class="form-control form-control-sm form-control-solid"
                                    placeholder="Nav item url" />
                            </div>
                            <div class="fv-row col-lg-12 mb-5">
                                <label for="exampleFormControlInput1"
                                    class="required form-label">{{ __('Parent') }}</label>
                                <select class="form-control form-control-sm form-control-solid"
                                    aria-label="Select Parent">
                                    <option disabled>{{ __('Select Parent') }}</option>
                                    <option value="">{{ __('Without Parent') }}</option>
                                    <!-- begin::Parents -->
                                    <!-- end::Parents -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-5">{{__('Submit')}}</button>
                        </div>
                    </form>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 1-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4">
            <!--begin::Title-->
            <h3 class="align-items-start flex-column m-3">
                <span class="card-label fw-bold text-dark">{{ __('Create new menu item') }}</span>
            </h3>
            <!--end::Title-->
            
        </div>
        <!--end::Col-->
    </div>

</x-base-layout>
