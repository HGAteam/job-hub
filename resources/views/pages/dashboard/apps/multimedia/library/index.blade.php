<x-base-layout>
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon-->
                    {!! theme()->getSvgIcon('icons/duotune/general/gen021.svg', 'svg-icon svg-icon-1 position-absolute ms-6') !!}
                    <!--end::Svg Icon-->
                    <input type="text" data-files-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="{{ __('Search Files') }}" />
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-files-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon-->
                        {!! theme()->getSvgIcon('icons/duotune/general/gen031.svg', 'svg-icon svg-icon-2') !!}
                        <!--end::Svg Icon-->
                        {{ __('Filter') }}
                    </button>
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
                        <div class="px-7 py-5" data-files-table-filter="form">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">{{ __('File Date') }}:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                    data-placeholder="Select option" data-allow-clear="true"
                                    data-files-table-filter="role" data-hide-search="true">
                                    <option value="all files">{{ __('All Dates') }}</option>
                                    @foreach ($folderNames as $folder)
                                        <option value="{{ $folder }}">
                                            {{ Str::lower(Str::of($folder)->headline()) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">{{ __('File Type') }}:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                    data-placeholder="Select option" data-allow-clear="true"
                                    data-files-table-filter="two-step" data-hide-search="true">
                                    <option value="all files">{{ __('All Files') }}</option>
                                    <option value="images">{{ __('Images') }}</option>
                                    <option value="videos">{{ __('Videos') }}</option>
                                    <option value="docs">{{ __('Docs') }}</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                    data-kt-menu-dismiss="true"
                                    data-files-table-filter="reset">{{ __('Reset') }}</button>
                                <button type="submit" class="btn btn-primary fw-semibold px-6"
                                    data-kt-menu-dismiss="true"
                                    data-files-table-filter="filter">{{ __('Apply') }}</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Filter-->
                    <!--begin::Add File-->
                    <a href="{{ route('multimedia.library.create') }}" class="btn btn-primary">
                        <!--begin::Svg Icon-->
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr075.svg', 'svg-icon svg-icon-2') !!}
                        {{ __('Add Files') }}
                    </a>
                    <!--end::Add File-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-files-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-files-table-select="selected_count"></span>{{ __('Selected') }}
                    </div>
                    <button type="button" class="btn btn-danger"
                        data-files-table-select="delete_selected">{{ __('Delete Selected') }}</button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_files">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#table_files .form-check-input" value="0" />
                            </div>
                        </th>
                        <th class="min-w-300px">{{ __('File') }}</th>
                        <th class="min-w-250px text-center">{{ __('Author') }}</th>
                        <th class="min-w-125px text-center">{{ __('Created at') }}</th>
                        <th class="min-w-125px text-center">{{ __('Updated at') }}</th>
                        <th class="text-end min-w-100px">{{ __('Actions') }}</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-semibold"></tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</x-base-layout>
