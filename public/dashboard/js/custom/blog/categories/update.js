"use strict";

// Class definition
var UpdateCategory = function () {
    // Shared variables
    const element = document.getElementById('edit_modal');
    const form = element.querySelector('#modal_form_edit');
    const modal = new bootstrap.Modal(element);

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
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: `${lang.t("Your form has not been cancelled!")}`,
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


    return {
        // Public functions
        init: function () {
            initUpdateCategory();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    UpdateCategory.init();
});
