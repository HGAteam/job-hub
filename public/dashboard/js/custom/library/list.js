"use strict";

var LIbraryList = (function () {
    // Define shared variables
    var table = document.getElementById("files_table");
    var datatable;
    var toolbarBase;
    var toolbarSelected;
    var selectedCount;

    // Private functions
    var initFileTable = function () {
        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            info: false,
            order: [],
            dom: "lrtip",
            scrollX: true,
            pageLength: 10,
            ajax: {
                url: "/home/multimedia/library/get-files",
            },
            lengthChange: false,
            columns: [
                // Disable ordering on column 0 (checkbox)
                {
                    data: null,
                    render: function (data) {
                        return `<div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="${data.id}" />
                    </div>`;
                    },
                },
                // Image
                {
                    data: null,
                    className: "d-flex align-items-center",
                    render: function (data) {
                        return `
                                <!--begin::Image -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="${data.url}">
                                        <div class="symbol-label">
                                            <img src="${data.url}" alt="${data.name}" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Image-->
                                <!--begin::Image details-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                </div>
                                <!--begin::Image details-->`;
                    }

                },
                // Author
                {
                    data: null,
                    className: "d-flex align-items-center",
                    render: function (data) {
                        return `<div class="d-flex flex-column">
                                <a href="#" class="text-gray-800 text-hover-primary mb-1">${data.user_name}</a>
                                <span>${data.user_role}</span>
                            </div>`;
                    }

                },
                // Created at
                {
                    data: null,
                    render: function (row) {
                        return moment(row['created_at']).format("DD MMM YYYY HH:mm");
                    },
                },
                // Updated at
                {
                    data: null,
                    render: function (row) {
                        return moment(row['updated_at']).format("DD MMM YYYY HH:mm");
                    },
                },
                // Disable ordering on column 5 (actions)
                {
                    data: null,
                    className: "text-center",
                    render: function (data) {
                        return `<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
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
                                 <a href="/home/user-manager/profile/settings/${data.slug}" class="menu-link px-3">Edit</a>
                             </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="/home/user-manager/delete/${data.id}" class="menu-link px-3" data-files-table-filter="delete_row">Delete</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->`;
                    },
                },
            ],
        });

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        datatable.on("draw", function () {
            initToggleToolbar();
            handleDeleteRows();
            toggleToolbars();
            KTMenu.createInstances();
        });
    };

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector(
            '[data-file-table-filter="search"]'
        );
        filterSearch.addEventListener("keyup", function (e) {
            datatable.search(e.target.value).draw();
        });
    };

    // Delete subscirption
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll(
            '[data-files-table-filter="delete_row"]'
        );

        deleteButtons.forEach((d) => {
            // Delete button on click
            d.addEventListener("click", function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest("tr");

                // Get user name
                const userName = parent
                    .querySelectorAll("td")[1]
                    .querySelectorAll("a")[1].innerText;
                const url = parent
                    .querySelectorAll("td")[5]
                    .querySelectorAll("a")[1].href;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: `${lang.t('Are you sure you want to delete')}` + " " + userName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: `${lang.t('Yes, delete!')}`,
                    cancelButtonText: `${lang.t('No, cancel')}`,
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary",
                    },
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: `${lang.t('You have deleted')}` + " " + userName + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: `${lang.t('Ok, got it!')}`,
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        })
                            .then(function () {
                                // Remove current row
                                axios.delete(url).then({});
                                datatable.row($(parent)).remove().draw();
                            })
                            .then(function () {
                                // Detect checked checkboxes
                                toggleToolbars();
                            });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: customerName + " " + `${lang.t('was not deleted')}.`,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: `${lang.t('Ok, got it!')}`,
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        });
                    }
                });
            });
        });
    };

    // Init toggle toolbar
    var initToggleToolbar = () => {
        // Toggle selected action toolbar
        // Select all checkboxes
        const checkboxes = table.querySelectorAll('[type="checkbox"]');

        // Select elements
        toolbarBase = document.querySelector(
            '[data-file-table-toolbar="base"]'
        );
        toolbarSelected = document.querySelector(
            '[data-file-table-toolbar="selected"]'
        );
        selectedCount = document.querySelector(
            '[data-file-table-select="selected_count"]'
        );
        const deleteSelected = document.querySelector(
            '[data-file-table-select="delete_selected"]'
        );

        // Toggle delete selected toolbar
        checkboxes.forEach((c) => {
            // Checkbox on click event
            c.addEventListener("click", function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });

        // Deleted selected rows
        deleteSelected.addEventListener("click", function () {
            // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
            Swal.fire({
                text: `${lang.t('Are you sure you want to delete selected files?')}`,
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: `${lang.t('Yes, delete!')}`,
                cancelButtonText: `${lang.t('No, cancel')}`,
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary",
                },
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                        text: `${lang.t('You have deleted all selected files!')}.`,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: `${lang.t('Ok, got it!')}`,
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        },
                    })
                        .then(function () {
                            // Remove all selected users
                            checkboxes.forEach((c) => {
                                if (c.checked) {
                                    axios.delete(
                                        "/home/user-manager/delete/" +
                                        c.value
                                    );
                                    datatable
                                        .row($(c.closest("tbody tr")))
                                        .remove()
                                        .draw();
                                }
                            });

                            // Remove header checked box
                            const headerCheckbox =
                                table.querySelectorAll('[type="checkbox"]')[0];
                            headerCheckbox.checked = false;
                        })
                        .then(function () {
                            toggleToolbars(); // Detect checked checkboxes
                            initToggleToolbar(); // Re-init toolbar to recalculate checkboxes
                        });
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: `${lang.t('Selected users was not deleted')}.`,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: `${lang.t('Ok, got it!')}`,
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        },
                    });
                }
            });
        });
    };

    // Toggle toolbars
    const toggleToolbars = () => {
        // Select refreshed checkbox DOM elements
        const allCheckboxes = table.querySelectorAll('tbody [type="checkbox"]');

        // Detect checkboxes state & count
        let checkedState = false;
        let count = 0;

        // Count checked boxes
        allCheckboxes.forEach((c) => {
            if (c.checked) {
                checkedState = true;
                count++;
            }
        });

        // Toggle toolbars
        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add("d-none");
            toolbarSelected.classList.remove("d-none");
        } else {
            toolbarBase.classList.remove("d-none");
            toolbarSelected.classList.add("d-none");
        }
    };

    return {
        // Public functions
        init: function () {
            if (!table) {
                return;
            }

            initFileTable();
            initToggleToolbar();
            handleSearchDatatable();
            handleDeleteRows();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    LIbraryList.init();
});
