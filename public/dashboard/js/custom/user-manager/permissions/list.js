"use strict";

// Class definition
var KTUsersPermissionsList = function () {
    // Shared variables
    var datatable;
    var table;

    // Init add schedule modal
    var initPermissionsList = () => {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        // tableRows.forEach(row => {
        //     const dateRow = row.querySelectorAll('td');
        //     const realDate = moment(dateRow[2].innerHTML, "DD MMM YYYY, LT").format(); // select date from 2nd column in table
        //     dateRow[2].setAttribute('data-order', realDate);
        // });

         // Init datatable --- more info on datatables: https://datatables.net/manual/
         datatable = $(table).DataTable({
            "info": false,
            'order': [],
            dom: "lrtip",
            scrollX: true,
            'ajax':{
                'url':'/home/user-manager/permissions/get-permissions'
            },
            'columns':[
                {'data': null},
                {'data': null},
                {'data': null},
                {'data': null},
            ],
            'columnDefs': [
                {
                    targets: 0,
                    render:function(data){
                        return `${lang.t(data.name)}`;
                    }
                },
                {
                    targets: 1,
                    render: function(data) {
                        let roleHTML = '';

                        if (data.roles && Array.isArray(data.roles)) {
                            data.roles.forEach(function(role) {
                                switch (role.trim()) {
                                    case 'Administrator':
                                        roleHTML += `<a href="../../demo1/dist/apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">${lang.t('Administrator')}</a>`;
                                        break;
                                    case 'Editor':
                                        roleHTML += `<a href="../../demo1/dist/apps/user-management/roles/view.html" class="badge badge-light-info fs-7 m-1">${lang.t('Editor')}</a>`;
                                        break;
                                    case 'Author':
                                        roleHTML += `<a href="../../demo1/dist/apps/user-management/roles/view.html" class="badge badge-light-warning fs-7 m-1">${lang.t('Author')}</a>`;
                                        break;
                                    default:
                                        roleHTML += `<a href="../../demo1/dist/apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">${lang.t('Registered User')}</a>`;
                                        break;
                                }
                            });
                        }

                        return roleHTML;
                    }
                },
                {
                    targets:2,
                    render: function(row){
                        return moment(row['created_at']).format("DD MMM YYYY, LT");
                    }
                },
                {
                    targets:3,
                    className: 'text-end',
                    render:function(data){
                        return `
                        <!--begin::Update-->
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Update-->
                        <!--begin::Delete-->
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Delete-->
                        `;
                    }
                }
            ]
        });
    }

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-permissions-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    // Delete user
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll('[data-kt-permissions-table-filter="delete_row"]');

        deleteButtons.forEach(d => {
            // Delete button on click
            d.addEventListener('click', function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest('tr');

                // Get permission name
                const permissionName = parent.querySelectorAll('td')[0].innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete " + permissionName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: "You have deleted " + permissionName + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            // Remove current row
                            datatable.row($(parent)).remove().draw();
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: customerName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            })
        });
    }


    return {
        // Public functions
        init: function () {
            table = document.querySelector('#kt_permissions_table');

            if (!table) {
                return;
            }

            initPermissionsList();
            handleSearchDatatable();
            handleDeleteRows();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersPermissionsList.init();
});
