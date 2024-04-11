"use strict";

var CategoriesList = (function () {
    // Define shared variables
    var table = document.getElementById("table_categories");
    var datatable;
    const element = document.getElementById('edit_modal');
    const form = element.querySelector('#modal_form_edit');
    const modal = new bootstrap.Modal(element);

    var initCategoriesTable = function () {
        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            info: false,
            order: [3],
            processing: true,
            serverSide: true,
            bFilter: false,
            pageLength: 10,
            ajax: {
                url: "/home/blog/categories/get-categories"
            },
            lengthChange: false,
            columns: [
                { data: "name" },
                { data: "slug" },
                { data: "description" },
                { data: null },
            ],
            columnDefs: [
                {
                    targets: 2,
                    orderable: false,
                    render: function (data, type, row) {
                        if (!data ||row["description"].toUpperCase() == "No Description".toUpperCase()
                        ) {
                            return `<span class="badge badge-light-warning">No Description&nbsp<i class="bi bi-emoji-dizzy"></i></span>`;
                        } else {
                            return data;
                        }
                    },
                },
                {
                    targets: 3,
                    orderable: false,
                    className: "text-end",
                    render: function (row) {
                        return `
                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                            ${lang.t('Actions')}
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="/home/blog/categories/${row["id"]}" class="menu-link px-3" data-action="edit_row">
                                    ${lang.t('Edit')}
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="/home/blog/categories/${row["id"]}" class="menu-link px-3" data-action="delete_row">
                                    ${lang.t('Delete')}
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    `;
                    },
                },
            ],
        });

        // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
        datatable.on("draw", function () {
            handleDeleteRows();
            handleEditRows();
            KTMenu.createInstances();
        });
    };

    // Edit Category modal
    var handleEditRows = () => {
        // Select all edit buttons
        const editButtons = table.querySelectorAll('[data-action="edit_row"]');
        // Initialize foreach to loop current object to edit and get current data
        editButtons.forEach((ed) => {
            // Edit button on click
            ed.addEventListener("click", function (e) {
                e.preventDefault();
                // Select parent row
                const parent = e.target.closest("tr");

                // Get Category name and description to edit
                const categoryName = parent.querySelectorAll("td")[0].innerText;
                const categoryDescription = parent.querySelectorAll("td")[2].innerText;
                form.action = parent.querySelectorAll("td")[3].querySelectorAll("a")[1].href;

                // Fill the modal title with the name of the captured in the loop
                element.querySelector(".modal-title").innerHTML = "Edit " + categoryName;

                // Fills in the name and description inputs with the data captured in the loop
                form.querySelector('[name="change_category_name"]').value = categoryName;
                form.querySelector('[name="change_description"]').value = categoryDescription;

                // Show modal
                modal.show();
            });
        });
    };

    // Init add schedule modal
    var initUpdateCategory = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'change_category_name': {
                        validators: {
                            notEmpty: {
                                message: `${lang.t('Category Name is required')}`
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.form-floating.modal_edit',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Close button handler
        const closeButton = element.querySelector('[data-action-modal="close_edit"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: `${lang.t("Are you sure you would like to close?")}`,
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: `${lang.t("Yes, close it!")}`,
                cancelButtonText: `${lang.t("No, return")}`,
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal
                    form.reset();
                }
            });
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-action-modal="cancel_edit"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: `${lang.t("Are you sure you would like to cancel?")}`,
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: `${lang.t("Yes, cancel it!")}`,
                cancelButtonText: `${lang.t("No, return")}`,
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal
                    form.reset();
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: `${lang.t("Your form has not been cancelled!")}.`,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: `${lang.t("Ok, got it!")}`,
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Submit button handler
        const submitButton = element.querySelector('[data-action-modal="submit"]');
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click
                        submitButton.disabled = true;

                        axios.post(form.getAttribute('action'), new FormData(form))
                        .then(function (response) {
                            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            Swal.fire({
                                text: `${lang.t("Your Form has been successfully changed")}.`,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: `${lang.t("Ok, got it!")}`,
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            });
                            form.reset();
                            modal.hide();
                            datatable.ajax.reload();
                        })
                        .catch(function (error) {
                            let dataMessage = error.response.data.message;
                            let dataErrors = error.response.data.errors;

                            for (const errorsKey in dataErrors) {
                                if (!dataErrors.hasOwnProperty(errorsKey)) continue;
                                dataMessage += "\r\n" + dataErrors[errorsKey];
                            }

                            if (error.response) {
                                Swal.fire({
                                    text: dataMessage,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: `${lang.t("Ok, got it!")}`,
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        })
                        .then(function () {
                            // always executed
                            // Hide loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;
                        });
                    } else {
                        // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: `${lang.t("Sorry, looks like there are some errors detected, please try again")}.`,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: `${lang.t("Ok, got it!")}`,
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });
    }

    // Delete subscirption
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll('[data-action="delete_row"]');
        // Initialize foreach to loop current object to delete
        deleteButtons.forEach((d) => {
            // Delete button on click
            d.addEventListener("click", function (e) {
                e.preventDefault();
                // Select parent row
                const parent = e.target.closest("tr");
                // Get category name
                const categoryName = parent.querySelectorAll("td")[0].innerText;
                const url = parent.querySelectorAll("td")[3].querySelectorAll("a")[2].href;
                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    html:`${lang.t('Are you sure you want to delete')} ${categoryName} ? <br> <b>${lang.t('If you delete this category you will delete all posts inside')}.</b> `,
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: `${lang.t("Yes, delete!")}`,
                    cancelButtonText: `${lang.t("No, cancel")}`,
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary",
                    },
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: `${lang.t('You have deleted')}  ${lang.t(categoryName)} !.`,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: `${lang.t("Ok, got it!")}`,
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        }).then(function () {
                            // Remove current row
                            axios.delete(url).then();
                            datatable.row($(parent)).remove().draw();
                        });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: `${lang.t(categoryName)} ${lang.t('was not deleted')}.`,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: `${lang.t("Ok, got it!")}`,
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        });
                    }
                });
            });
        });
    };

    return {
        // Public functions
        init: function () {
            if (!table) {
                return;
            }
            initCategoriesTable();
            initUpdateCategory();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    CategoriesList.init();
});
