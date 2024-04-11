'use strict'

// Class definition
var AddCategory = (function () {
  // Elements
  var form
  var submitButton
  var cancelButton
  var validator

  // Handle form
  var handleForm = function (e) {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    validator = FormValidation.formValidation(form, {
      fields: {
        category_name: {
          validators: {
            notEmpty: {
              message: `${lang.t('Category Name is required')}`,
            },
          },
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger({
          event: {
            password: false,
          },
        }),
        bootstrap: new FormValidation.plugins.Bootstrap5({
          rowSelector: '.form-floating',
          eleInvalidClass: '',
          eleValidClass: '',
        }),
      },
    })

    // Submit button handler
    submitButton = form.querySelector('[data-action="submit"]')
    submitButton.addEventListener('click', function (e) {
      e.preventDefault()
      // Validate form before submit
      if (validator) {
        validator.validate().then(function (status) {
          console.log('validated!')

          if (status == 'Valid') {
            // Show loading indication
            submitButton.setAttribute('data-kt-indicator', 'on')

            // Disable button to avoid multiple click
            submitButton.disabled = true

            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
            axios
              .post(
                submitButton.closest('form').getAttribute('action'),
                new FormData(form),
              )
              .then(function (response) {
                // Show popup confirmation
                Swal.fire({
                  text: `${lang.t('Form has been successfully submitted!')}`,
                  icon: 'success',
                  buttonsStyling: false,
                  confirmButtonText: `${lang.t('Ok, got it!')}`,
                  customClass: {
                    confirmButton: 'btn btn-primary',
                  },
                }).then(function (result) {
                  if (result.isConfirmed) {
                    form.reset()
                    $('#table_categories').DataTable().ajax.reload()
                  }
                })
              })
              .catch(function (error) {
                let dataMessage = error.response.data.message
                let dataErrors = error.response.data.errors

                for (const errorsKey in dataErrors) {
                  if (!dataErrors.hasOwnProperty(errorsKey)) continue
                  dataMessage += '\r\n' + dataErrors[errorsKey]
                }

                if (error.response) {
                  Swal.fire({
                    text: `${lang.t(dataMessage)}`,
                    icon: 'error',
                    buttonsStyling: false,
                    confirmButtonText: `${lang.t('Ok, got it!')}`,
                    customClass: {
                      confirmButton: 'btn btn-primary',
                    },
                  })
                }
              })
              .then(function () {
                // Remove loading indication
                submitButton.removeAttribute('data-kt-indicator')

                // Enable button
                submitButton.disabled = false

                //form.submit(); // Submit form
              })
          } else {
            // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
            Swal.fire({
              text: `${lang.t('Sorry, looks like there are some errors detected, please try again')}.`,
              icon: 'error',
              buttonsStyling: false,
              confirmButtonText: `${lang.t('Ok, got it!')}`,
              customClass: {
                confirmButton: 'btn btn-primary',
              },
            })
          }
        })
      }
    })

    // Cancel button handler
    cancelButton = form.querySelector('[data-action="cancel"]')
    cancelButton.addEventListener('click', function (e) {
      e.preventDefault()

      Swal.fire({
        text: `${lang.t('Are you sure you would like to cancel?')}`,
        icon: 'warning',
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: `${lang.t('Yes, cancel it!')}`,
        cancelButtonText: `${lang.t('No, return')}`,
        customClass: {
          confirmButton: 'btn btn-primary',
          cancelButton: 'btn btn-active-light',
        },
      }).then(function (result) {
        if (result.value) {
          form.reset() // Reset form
        } else if (result.dismiss === 'cancel') {
          Swal.fire({
            text: `${lang.t('Your form has not been cancelled!')}`,
            icon: 'error',
            buttonsStyling: false,
            confirmButtonText: `${lang.t('Ok, got it!')}`,
            customClass: {
              confirmButton: 'btn btn-primary',
            },
          })
        }
      })
    })
  }

  // Public functions
  return {
    // Initialization
    init: function () {
      form = document.querySelector('#new_form_category')
      handleForm()
    },
  }
})()

// On document ready
KTUtil.onDOMContentLoaded(function () {
  AddCategory.init()
})
