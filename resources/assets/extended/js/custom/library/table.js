'use strict'

var FilesList = (function () {
    // Define shared variables
    var table = document.getElementById('table_files')
    var datatable
    var toolbarBase
    var toolbarSelected
    var selectedCount

    // Private functions
    var initFilesTable = function () {

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            info: false,
            order: [5],
            processing: true,
            serverSide: true,
            bFilter: false,
            scrollX: true,
            pageLength: 10,
            ajax: {
                url: "/home/multimedia/library/get-files",
            },
            lengthChange: false,
            columns: [
                { data: null }, // Checkbox
                { data: null }, // File
                { data: null }, // Author
                { data: "created_at", name: "created_at", searchable: true }, // Created At
                { data: "updated_at", name: "updated_at", searchable: true }, // Updated At
                { data: null }, // Actions
            ],
            columnDefs: [
                // Disable ordering on column 0 (checkbox)
                {
                    targets: 0,
                    orderable: false,
                    searchable: false,
                    render: function (data) {
                        return `<div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="${data.id}" />
                        </div>`;
                    },
                },
                // Image
                {
                    targets: 1,
                    orderable: true,
                    searchable: true,
                    className: "d-flex align-items-center",
                    render: function (data) {
                        switch (data.type) {
                            case 'video':
                                return `<!--begin::Image -->
                                <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                    <a href="#${data.url}">
                                        <div class="symbol-label">
                                            <img src="/dashboard/media/icons/duotune/electronics/elc004.svg" alt="${data.name}" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Image-->
                                <!--begin::Details-->
                                <div class="d-flex flex-column">
                                    <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                    <span>${data.url}</span>
                                </div>
                                <!--begin::Details-->`;
                                break;
                            case 'audio':
                                return `<!--begin::Image -->
                                <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                    <a href="#${data.url}">
                                        <div class="symbol-label">
                                            <img src="/dashboard/media/icons/duotune/general/gen015.svg" alt="${data.name}" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Image-->
                                <!--begin::Details-->
                                <div class="d-flex flex-column">
                                    <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                    <span>${data.url}</span>
                                </div>
                                <!--begin::Details-->`;
                                break;
                            case 'application':
                                switch (data.extension) {
                                    case 'xml':
                                        return `<!--begin::Image -->
                                        <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                            <a href="#${data.url}">
                                                <div class="symbol-label">
                                                    <img src="/dashboard/media/svg/files/xml.svg" alt="${data.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Details-->
                                        <div class="d-flex flex-column">
                                            <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                            <span>${data.url}</span>
                                        </div>
                                        <!--begin::Details-->`;
                                        break;
                                    case 'msword':
                                        return `<!--begin::Image -->
                                        <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                            <a href="#${data.url}">
                                                <div class="symbol-label">
                                                    <img src="/dashboard/media/svg/files/doc.svg" alt="${data.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Details-->
                                        <div class="d-flex flex-column">
                                            <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                            <span>${data.url}</span>
                                        </div>
                                        <!--begin::Details-->`;
                                        break;
                                    case 'vnd.openxmlformats-officedocument.wordprocessingml.document':
                                        return `<!--begin::Image -->
                                        <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                            <a href="#${data.url}">
                                                <div class="symbol-label">
                                                    <img src="/dashboard/media/svg/files/doc.svg" alt="${data.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Details-->
                                        <div class="d-flex flex-column">
                                            <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                            <span>${data.url}</span>
                                        </div>
                                        <!--begin::Details-->`;
                                        break;
                                    case 'vnd.ms-excel':
                                        return `<!--begin::Image -->
                                        <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                            <a href="#${data.url}">
                                                <div class="symbol-label">
                                                    <img src="/dashboard/media/svg/files/xls.svg" alt="${data.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Details-->
                                        <div class="d-flex flex-column">
                                            <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                            <span>${data.url}</span>
                                        </div>
                                        <!--begin::Details-->`;
                                        break;
                                    case 'vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                                        return `<!--begin::Image -->
                                        <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                            <a href="#${data.url}">
                                                <div class="symbol-label">
                                                    <img src="/dashboard/media/svg/files/xlxs.svg" alt="${data.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Details-->
                                        <div class="d-flex flex-column">
                                            <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                            <span>${data.url}</span>
                                        </div>
                                        <!--begin::Details-->`;
                                        break;
                                    default:
                                        return `<!--begin::Image -->
                                        <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                            <a href="#${data.url}">
                                                <div class="symbol-label">
                                                    <img src="/dashboard/media/svg/files/pdf.svg" alt="${data.name}" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Details-->
                                        <div class="d-flex flex-column">
                                            <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                            <span>${data.url}</span>
                                        </div>
                                        <!--begin::Details-->`;
                                        break;
                                }
                                break;
                            default:
                                return `<!--begin::Image -->
                                <div class="symbol symbol-rounded symbol-50px overflow-hidden me-3">
                                    <a href="#${data.url}">
                                        <div class="symbol-label">
                                            <img src="${data.url}" alt="${data.name}" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Image-->
                                <!--begin::Details-->
                                <div class="d-flex flex-column">
                                    <a href="#${data.name}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                    <span>${data.url}</span>
                                </div>
                                <!--begin::Details-->`;
                                break;
                        }
                    }
                },
                // Author
                {
                    targets: 2,
                    orderable: true,
                    searchable: true,
                    className: "text-center",
                    render: function (data) {
                        return `<!--begin::Details-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-800 text-hover-primary mb-1">${data.user_name}</a>
                                    <span>${lang.t(data.user_role)}</span>
                                </div>
                                <!--begin::Details-->`;
                    }
                },
                // Disable ordering on column 5 (actions)
                {
                    targets: 5,
                    orderable: false,
                    className: "text-center",
                    searchable: false,
                    render: function (data) {
                        return `<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">${lang.t('Actions')}
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="/home/multimedia/library/edit/${data.id}" class="menu-link px-3">${lang.t('Edit')}</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="/home/multimedia/library/delete/${data.id}" class="menu-link px-3" data-files-table-filter="delete_row">${lang.t('Delete')}</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->`;
                    },
                },
            ]
        });

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        datatable.on('draw', function () {
            initToggleToolbar()
            handleDeleteRows()
            toggleToolbars()
            handleSearchDatatable()
            KTMenu.createInstances()
        })

    };

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-files-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            // datatable.search(e.target.value).draw();
            datatable.columns([3, 4]).search(e.target.value).draw();
        });
    }

    // Filter Datatable
    var handleFilterDatatable = () => {
        // Select filter options
        const filterForm = document.querySelector(
            '[data-files-table-filter="form"]',
        )
        const filterButton = filterForm.querySelector(
            '[data-files-table-filter="filter"]',
        )
        const selectOptions = filterForm.querySelectorAll('select')

        // Filter datatable on submit
        filterButton.addEventListener('click', function () {
            var filterString = ''

            // Get filter values
            selectOptions.forEach((item, index) => {
                if (item.value && item.value !== '') {
                    if (index !== 0) {
                        filterString += ' '
                    }

                    // Build filter value options
                    filterString += item.value
                }
            })

            // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
            datatable.search(filterString).draw()
        })
    }

    // Reset Filter
    var handleResetForm = () => {
        // Select reset button
        const resetButton = document.querySelector(
            '[data-files-table-filter="reset"]',
        )

        // Reset datatable
        resetButton.addEventListener('click', function () {
            // Select filter options
            const filterForm = document.querySelector(
                '[data-files-table-filter="form"]',
            )
            const selectOptions = filterForm.querySelectorAll('select')

            // Reset select2 values -- more info: https://select2.org/programmatic-control/add-select-clear-items
            selectOptions.forEach((select) => {
                $(select).val('').trigger('change')
            })

            // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
            datatable.search('').draw()
        })
    }

    // Delete file
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll('[data-files-table-filter="delete_row"]')

        deleteButtons.forEach((d) => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest('tr')

                // Get file title
                const fileTitle = parent.querySelectorAll('td')[1].querySelectorAll('a')[1].innerText;
                const url = parent.querySelectorAll('td')[5].querySelectorAll('a')[2].href;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: `${lang.t('Are you sure you want to delete')}` + ' ' + fileTitle + '?',
                    icon: 'warning',
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: `${lang.t('Yes, delete!')}`,
                    cancelButtonText: `${lang.t('No, cancel')}`,
                    customClass: {
                        confirmButton: 'btn fw-bold btn-danger',
                        cancelButton: 'btn fw-bold btn-active-light-primary',
                    },
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: `${lang.t('You have deleted')}` + ' ' + fileTitle + '!.',
                            icon: 'success',
                            buttonsStyling: false,
                            confirmButtonText: `${lang.t('Ok, got it!')}`,
                            customClass: {
                                confirmButton: 'btn fw-bold btn-primary',
                            },
                        })
                            .then(function (e) {
                                e.preventDefault
                                // Remove current row
                                axios.delete(url).then();
                                datatable.row($(parent)).remove().draw()
                            })
                            .then(function () {
                                // Detect checked checkboxes
                                toggleToolbars()
                            })
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: customerName + ' ' + `${lang.t('was not deleted')}.`,
                            icon: 'error',
                            buttonsStyling: false,
                            confirmButtonText: `${lang.t('Ok, got it!')}`,
                            customClass: {
                                confirmButton: 'btn fw-bold btn-primary',
                            },
                        })
                    }
                })
            })
        })
    }

    // Init toggle toolbar
    var initToggleToolbar = () => {
        // Toggle selected action toolbar
        // Select all checkboxes
        const checkboxes = table.querySelectorAll('[type="checkbox"]')

        // Select elements
        toolbarBase = document.querySelector('[data-files-table-toolbar="base"]')
        toolbarSelected = document.querySelector('[data-files-table-toolbar="selected"]')
        selectedCount = document.querySelector('[data-files-table-select="selected_count"]')
        const deleteSelected = document.querySelector('[data-files-table-select="delete_selected"]')

        // Toggle delete selected toolbar
        checkboxes.forEach((c) => {
            // Checkbox on click event
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars()
                }, 50)
            })
        })

        // Deleted selected rows
        deleteSelected.addEventListener('click', function () {
            // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
            Swal.fire({
                text: `${lang.t('Are you sure you want to delete selected files?')}`,
                icon: 'warning',
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: `${lang.t('Yes, delete!')}`,
                cancelButtonText: `${lang.t('No, cancel')}`,
                customClass: {
                    confirmButton: 'btn fw-bold btn-danger',
                    cancelButton: 'btn fw-bold btn-active-light-primary',
                },
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                        text: `${lang.t('You have deleted all selected files!')}.`,
                        icon: 'success',
                        buttonsStyling: false,
                        confirmButtonText: `${lang.t('Ok, got it!')}`,
                        customClass: {
                            confirmButton: 'btn fw-bold btn-primary',
                        },
                    }).then(function () {
                        // Remove all selected customers
                        checkboxes.forEach((c) => {
                            if (c.checked) {
                                // Remove current row
                                axios.delete('/home/multimedia/library/delete/' + c.value).then();
                                datatable.row($(c.closest('tbody tr'))).remove().draw()
                            }
                        })

                        // Remove header checked box
                        const headerCheckbox = table.querySelectorAll('[type="checkbox"]',)[0]
                        headerCheckbox.checked = false
                    })
                        .then(function () {
                            toggleToolbars() // Detect checked checkboxes
                            initToggleToolbar() // Re-init toolbar to recalculate checkboxes
                        })
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: `${lang.t('Selected customers was not deleted')}.`,
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: `${lang.t('Ok, got it!')}`,
                        customClass: {
                            confirmButton: 'btn fw-bold btn-primary',
                        },
                    })
                }
            })
        })
    }

    // Obtener el título del checkbox que selecciona todos los elementos
    const headerCheckbox = table.querySelector('thead [type="checkbox"]');

    // Toggle toolbars
    const toggleToolbars = () => {
        // Select refreshed checkbox DOM elements
        const allCheckboxes = table.querySelectorAll('tbody [type="checkbox"]')

        // Detect checkboxes state & count
        let checkedState = false
        let count = 0

        // Count checked boxes
        allCheckboxes.forEach((c) => {
            if (c.checked) {
                checkedState = true
                count++
            }
        })

        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count
            // Check/uncheck the header checkbox based on the state of all checkboxes
            headerCheckbox.checked = count === allCheckboxes.length;
            toolbarBase.classList.add('d-none')
            toolbarSelected.classList.remove('d-none')
        } else {
            // If no checkboxes are selected, uncheck the header checkbox
            headerCheckbox.checked = false;
            toolbarBase.classList.remove('d-none')
            toolbarSelected.classList.add('d-none')
        }
    }

    // // Agregar un evento 'click' al título del checkbox
    headerCheckbox.addEventListener('click', function () {
        setTimeout(function () {
            toggleToolbars();
        }, 50);
    });

    return {
        // Public functions
        init: function () {
            if (!table) {
                return
            }
            initFilesTable()
            initToggleToolbar()
            handleResetForm()
            handleDeleteRows()
            handleFilterDatatable()
        },
    }
})()

// On document ready
KTUtil.onDOMContentLoaded(function () {
    FilesList.init()
})
