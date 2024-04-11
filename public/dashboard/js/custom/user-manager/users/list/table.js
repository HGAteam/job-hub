"use strict";

var KTUsersList = (function () {
    // Define shared variables
    var table = document.getElementById("kt_table_users");
    var datatable;
    var toolbarBase;
    var toolbarSelected;
    var selectedCount;

    // Private functions
    var initUserTable = function () {
        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            info: false,
            order: [],
            dom: "lrtip",
            scrollX: true,
            pageLength: 10,
            ajax: {
                url: "/home/user-manager/get-users",
            },
            lengthChange: false,
            columns: [
                { data: null },
                { data: null },
                { data: "role" },
                { data: null },
                { data: null },
                { data: "joined_date" },
                { data: null },
            ],
            columnDefs: [
                // Disable ordering on column 0 (checkbox)
                {
                    orderable: false,
                    targets: 0,
                    render: function (data) {
                        return `<div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="${data.id}" />
                    </div>`;
                    },
                },
                // User Info
                {
                    orderable: true,
                    targets: 1,
                    className: "d-flex align-items-center",
                    render: function (data) {
                        return `<!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="/home/user-manager/profile/overview/${data.slug}">
                                <div class="symbol-label">
                                    <img src="${data.avatar}" alt="${data.name}" class="w-100" />
                                </div>
                            </a>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::User details-->
                        <div class="d-flex flex-column">
                            <a href="/home/user-manager/profile/overview/${data.slug}" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                            <span>${data.email}</span>
                        </div>
                        <!--begin::User details-->`;
                    },
                },
                // Last Login
                {
                    orderable: false,
                    targets: 3,
                    render: function (data, row) {
                        if (data.last_login) {
                            return `${row["last_login"]}`;
                        } else {
                            return `
							<div class="badge badge-light-warning fw-bold">The user is not logged in yet</div>
                            `;
                        }
                    },
                },
                // User Active
                {
                    orderable: true,
                    targets: 4,
                    render: function (data, row) {
                        if(data.role == "System Admin" || data.role == "Admin"){
                            return `<a href="#" class="badge badge-light-success fw-bold" data-action="activate">Active</a>`;
                        }else{
                            if (data.active == true) {
                                return `
                                <a href="/home/user-manager/activate/${data.id}" class="badge badge-light-success fw-bold" data-action="activate">Active</a>
                                `;
                            } else {
                                return `
                                <a href="/home/user-manager/activate/${data.id}" class="badge badge-light-danger fw-bold" data-action="activate">Inactive</a>
                                `;
                            }
                        }
                    },
                },
                // Disable ordering on column 6 (actions)
                {
                    orderable: false,
                    targets: 6,
                    className: "text-center",
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
                                 <a href="/home/user-manager/profile/settings/${data.slug}" class="menu-link px-3">${lang.t('Edit')}</a>
                             </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="/home/user-manager/delete/${data.id}" class="menu-link px-3" data-kt-users-table-filter="delete_row">${lang.t('Delete')}</a>
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
            activateUseraAccount();
            KTMenu.createInstances();
        });
    };

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector(
            '[data-kt-user-table-filter="search"]'
        );
        filterSearch.addEventListener("keyup", function (e) {
            datatable.search(e.target.value).draw();
        });
    };


    // Delete subscirption
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll(
            '[data-kt-users-table-filter="delete_row"]'
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
                    .querySelectorAll("td")[6]
                    .querySelectorAll("a")[2].href;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete " + userName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary",
                    },
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: "You have deleted " + userName + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        })
                            .then(function () {
                                // Remove current row
                                axios.delete(url);
                                datatable.row($(parent)).remove().draw();
                            })
                            .then(function () {
                                // Detect checked checkboxes
                                toggleToolbars();
                            });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: customerName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
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
            '[data-kt-user-table-toolbar="base"]'
        );
        toolbarSelected = document.querySelector(
            '[data-kt-user-table-toolbar="selected"]'
        );
        selectedCount = document.querySelector(
            '[data-kt-user-table-select="selected_count"]'
        );
        const deleteSelected = document.querySelector(
            '[data-kt-user-table-select="delete_selected"]'
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
                text: "Are you sure you want to delete selected users?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary",
                },
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                        text: "You have deleted all selected users!.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
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
                        text: "Selected users was not deleted.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        },
                    });
                }
            });
        });
    };

    var activateUseraAccount = () => {
        // users/activate/{id}
        const activate_btns = table.querySelectorAll(
            '[data-action="activate"]'
        );
        activate_btns.forEach((btn) => {
            btn.addEventListener("click", function (e) {
                e.preventDefault();
                // Select parent row
                const parent = e.target.closest("tr");

                // Get user name
                const userName = parent
                    .querySelectorAll("td")[1]
                    .querySelectorAll("a")[1].innerText;
                const url = parent
                    .querySelectorAll("td")[4]
                    .querySelectorAll("a")[0].href;

                axios
                    .post(url)
                    .then((response) => {
                        toastr.options = {
                            closeButton: false,
                            debug: false,
                            newestOnTop: false,
                            progressBar: false,
                            positionClass: "toastr-top-right",
                            preventDuplicates: false,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            timeOut: "5000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                        };

                        if (
                            parent
                                .querySelectorAll("td")[4]
                                .querySelectorAll("a")[0].innerText ==
                            "Inactive"
                        ) {

                            toastr.success(
                                "User account activated for " + userName,
                                "User Account Activated"
                                );
                                datatable.ajax.reload();
                        } else {
                            toastr.warning(
                                "User account was deactivated for " + userName,
                                "User Account Deactivated"
                                );
                                datatable.ajax.reload();
                            }

                        // handle success
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });
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

            initUserTable();
            initToggleToolbar();
            handleSearchDatatable();
            handleDeleteRows();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersList.init();
});
