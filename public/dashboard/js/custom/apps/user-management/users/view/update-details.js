/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/apps/user-management/users/view/update-details.js":
/*!*******************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/apps/user-management/users/view/update-details.js ***!
  \*******************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTUsersUpdateDetails = function () {\n  // Shared variables\n  var element = document.getElementById('kt_modal_update_details');\n  var form = element.querySelector('#kt_modal_update_user_form');\n  var modal = new bootstrap.Modal(element);\n\n  // Init add schedule modal\n  var initUpdateDetails = function initUpdateDetails() {\n    // Close button handler\n    var closeButton = element.querySelector('[data-kt-users-modal-action=\"close\"]');\n    closeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to cancel?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, cancel it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          form.reset(); // Reset form\t\n          modal.hide(); // Hide modal\t\t\t\t\n        } else if (result.dismiss === 'cancel') {\n          Swal.fire({\n            text: \"Your form has not been cancelled!.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"Ok, got it!\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    });\n\n    // Cancel button handler\n    var cancelButton = element.querySelector('[data-kt-users-modal-action=\"cancel\"]');\n    cancelButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to cancel?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, cancel it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          form.reset(); // Reset form\t\n          modal.hide(); // Hide modal\t\t\t\t\n        } else if (result.dismiss === 'cancel') {\n          Swal.fire({\n            text: \"Your form has not been cancelled!.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"Ok, got it!\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    });\n\n    // Submit button handler\n    var submitButton = element.querySelector('[data-kt-users-modal-action=\"submit\"]');\n    submitButton.addEventListener('click', function (e) {\n      // Prevent default button action\n      e.preventDefault();\n\n      // Show loading indication\n      submitButton.setAttribute('data-kt-indicator', 'on');\n\n      // Disable button to avoid multiple click \n      submitButton.disabled = true;\n\n      // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n      setTimeout(function () {\n        // Remove loading indication\n        submitButton.removeAttribute('data-kt-indicator');\n\n        // Enable button\n        submitButton.disabled = false;\n\n        // Show popup confirmation \n        Swal.fire({\n          text: \"Form has been successfully submitted!\",\n          icon: \"success\",\n          buttonsStyling: false,\n          confirmButtonText: \"Ok, got it!\",\n          customClass: {\n            confirmButton: \"btn btn-primary\"\n          }\n        }).then(function (result) {\n          if (result.isConfirmed) {\n            modal.hide();\n          }\n        });\n\n        //form.submit(); // Submit form\n      }, 2000);\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      initUpdateDetails();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTUsersUpdateDetails.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvdXNlci1tYW5hZ2VtZW50L3VzZXJzL3ZpZXcvdXBkYXRlLWRldGFpbHMuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxvQkFBb0IsR0FBRyxZQUFZO0VBQ25DO0VBQ0EsSUFBTUMsT0FBTyxHQUFHQyxRQUFRLENBQUNDLGNBQWMsQ0FBQyx5QkFBeUIsQ0FBQztFQUNsRSxJQUFNQyxJQUFJLEdBQUdILE9BQU8sQ0FBQ0ksYUFBYSxDQUFDLDRCQUE0QixDQUFDO0VBQ2hFLElBQU1DLEtBQUssR0FBRyxJQUFJQyxTQUFTLENBQUNDLEtBQUssQ0FBQ1AsT0FBTyxDQUFDOztFQUUxQztFQUNBLElBQUlRLGlCQUFpQixHQUFHLFNBQXBCQSxpQkFBaUJBLENBQUEsRUFBUztJQUUxQjtJQUNBLElBQU1DLFdBQVcsR0FBR1QsT0FBTyxDQUFDSSxhQUFhLENBQUMsc0NBQXNDLENBQUM7SUFDakZLLFdBQVcsQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQUFDLENBQUMsRUFBSTtNQUN2Q0EsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7TUFFbEJDLElBQUksQ0FBQ0MsSUFBSSxDQUFDO1FBQ05DLElBQUksRUFBRSx3Q0FBd0M7UUFDOUNDLElBQUksRUFBRSxTQUFTO1FBQ2ZDLGdCQUFnQixFQUFFLElBQUk7UUFDdEJDLGNBQWMsRUFBRSxLQUFLO1FBQ3JCQyxpQkFBaUIsRUFBRSxpQkFBaUI7UUFDcENDLGdCQUFnQixFQUFFLFlBQVk7UUFDOUJDLFdBQVcsRUFBRTtVQUNUQyxhQUFhLEVBQUUsaUJBQWlCO1VBQ2hDQyxZQUFZLEVBQUU7UUFDbEI7TUFDSixDQUFDLENBQUMsQ0FBQ0MsSUFBSSxDQUFDLFVBQVVDLE1BQU0sRUFBRTtRQUN0QixJQUFJQSxNQUFNLENBQUNDLEtBQUssRUFBRTtVQUNkdkIsSUFBSSxDQUFDd0IsS0FBSyxFQUFFLENBQUMsQ0FBQztVQUNkdEIsS0FBSyxD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LE9BQU87SUFDSDtJQUNBUSxJQUFJLEVBQUUsU0FBQUEsS0FBQSxFQUFZO01BQ2Q1QixpQkFBaUIsRUFBRTtJQUN2QjtFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQTZCLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBWTtFQUNsQ3ZDLG9CQUFvQixDQUFDcUMsSUFBSSxFQUFFO0FBQy9CLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vYXBwcy91c2VyLW1hbmFnZW1lbnQvdXNlcnMvdmlldy91cGRhdGUtZGV0YWlscy5qcz8yM2U4Il0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RVc2Vyc1VwZGF0ZURldGFpbHMgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAvLyBTaGFyZWQgdmFyaWFibGVzXHJcbiAgICBjb25zdCBlbGVtZW50ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X21vZGFsX3VwZGF0ZV9kZXRhaWxzJyk7XHJcbiAgICBjb25zdCBmb3JtID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCcja3RfbW9kYWxfdXBkYXRlX3VzZXJfZm9ybScpO1xyXG4gICAgY29uc3QgbW9kYWwgPSBuZXcgYm9vdHN0cmFwLk1vZGFsKGVsZW1lbnQpO1xyXG5cclxuICAgIC8vIEluaXQgYWRkIHNjaGVkdWxlIG1vZGFsXHJcbiAgICB2YXIgaW5pdFVwZGF0ZURldGFpbHMgPSAoKSA9PiB7XHJcblxyXG4gICAgICAgIC8vIENsb3NlIGJ1dHRvbiBoYW5kbGVyXHJcbiAgICAgICAgY29uc3QgY2xvc2VCdXR0b24gPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LXVzZXJzLW1vZGFsLWFjdGlvbj1cImNsb3NlXCJdJyk7XHJcbiAgICAgICAgY2xvc2VCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBlID0+IHtcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgIHRleHQ6IFwiQXJlIHlvdSBzdXJlIHlvdSB3b3VsZCBsaWtlIHRvIGNhbmNlbD9cIixcclxuICAgICAgICAgICAgICAgIGljb246IFwid2FybmluZ1wiLFxyXG4gICAgICAgICAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcclxuICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIlllcywgY2FuY2VsIGl0IVwiLFxyXG4gICAgICAgICAgICAgICAgY2FuY2VsQnV0dG9uVGV4dDogXCJObywgcmV0dXJuXCIsXHJcbiAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCIsXHJcbiAgICAgICAgICAgICAgICAgICAgY2FuY2VsQnV0dG9uOiBcImJ0biBidG4tYWN0aXZlLWxpZ2h0XCJcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgICAgICBpZiAocmVzdWx0LnZhbHVlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgZm9ybS5yZXNldCgpOyAvLyBSZXNldCBmb3JtXHRcclxuICAgICAgICAgICAgICAgICAgICBtb2RhbC5oaWRlKCk7IC8vIEhpZGUgbW9kYWxcdFx0XHRcdFxyXG4gICAgICAgICAgICAgICAgfSBlbHNlIGlmIChyZXN1bHQuZGlzbWlzcyA9PT0gJ2NhbmNlbCcpIHtcclxuICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIllvdXIgZm9ybSBoYXMgbm90IGJlZW4gY2FuY2VsbGVkIS5cIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgaWNvbjogXCJlcnJvclwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAvLyBDYW5jZWwgYnV0dG9uIGhhbmRsZXJcclxuICAgICAgICBjb25zdCBjYW5jZWxCdXR0b24gPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LXVzZXJzLW1vZGFsLWFjdGlvbj1cImNhbmNlbFwiXScpO1xyXG4gICAgICAgIGNhbmNlbEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGUgPT4ge1xyXG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG4gICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgdGV4dDogXCJBcmUgeW91IHN1cmUgeW91IHdvdWxkIGxpa2UgdG8gY2FuY2VsP1wiLFxyXG4gICAgICAgICAgICAgICAgaWNvbjogXCJ3YXJuaW5nXCIsXHJcbiAgICAgICAgICAgICAgICBzaG93Q2FuY2VsQnV0dG9uOiB0cnVlLFxyXG4gICAgICAgICAgICAgICAgYnV0dG9uc1N0eWxpbmc6IGZhbHNlLFxyXG4gICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiWWVzLCBjYW5jZWwgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiBcIk5vLCByZXR1cm5cIixcclxuICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvbjogXCJidG4gYnRuLXByaW1hcnlcIixcclxuICAgICAgICAgICAgICAgICAgICBjYW5jZWxCdXR0b246IFwiYnRuIGJ0bi1hY3RpdmUtbGlnaHRcIlxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXN1bHQpIHtcclxuICAgICAgICAgICAgICAgIGlmIChyZXN1bHQudmFsdWUpIHtcclxuICAgICAgICAgICAgICAgICAgICBmb3JtLnJlc2V0KCk7IC8vIFJlc2V0IGZvcm1cdFxyXG4gICAgICAgICAgICAgICAgICAgIG1vZGFsLmhpZGUoKTsgLy8gSGlkZSBtb2RhbFx0XHRcdFx0XHJcbiAgICAgICAgICAgICAgICB9IGVsc2UgaWYgKHJlc3VsdC5kaXNtaXNzID09PSAnY2FuY2VsJykge1xyXG4gICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRleHQ6IFwiWW91ciBmb3JtIGhhcyBub3QgYmVlbiBjYW5jZWxsZWQhLlwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcImVycm9yXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgY3VzdG9tQ2xhc3M6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgIC8vIFN1Ym1pdCBidXR0b24gaGFuZGxlclxyXG4gICAgICAgIGNvbnN0IHN1Ym1pdEJ1dHRvbiA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignW2RhdGEta3QtdXNlcnMtbW9kYWwtYWN0aW9uPVwic3VibWl0XCJdJyk7XHJcbiAgICAgICAgc3VibWl0QnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICAgICAgLy8gUHJldmVudCBkZWZhdWx0IGJ1dHRvbiBhY3Rpb25cclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgLy8gU2hvdyBsb2FkaW5nIGluZGljYXRpb25cclxuICAgICAgICAgICAgc3VibWl0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcclxuXHJcbiAgICAgICAgICAgIC8vIERpc2FibGUgYnV0dG9uIHRvIGF2b2lkIG11bHRpcGxlIGNsaWNrIFxyXG4gICAgICAgICAgICBzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSB0cnVlO1xyXG5cclxuICAgICAgICAgICAgLy8gU2ltdWxhdGUgZm9ybSBzdWJtaXNzaW9uLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOiBodHRwczovL3N3ZWV0YWxlcnQyLmdpdGh1Yi5pby9cclxuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICAgICAvLyBSZW1vdmUgbG9hZGluZyBpbmRpY2F0aW9uXHJcbiAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24ucmVtb3ZlQXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicpO1xyXG5cclxuICAgICAgICAgICAgICAgIC8vIEVuYWJsZSBidXR0b25cclxuICAgICAgICAgICAgICAgIHN1Ym1pdEJ1dHRvbi5kaXNhYmxlZCA9IGZhbHNlO1xyXG5cclxuICAgICAgICAgICAgICAgIC8vIFNob3cgcG9wdXAgY29uZmlybWF0aW9uIFxyXG4gICAgICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIkZvcm0gaGFzIGJlZW4gc3VjY2Vzc2Z1bGx5IHN1Ym1pdHRlZCFcIixcclxuICAgICAgICAgICAgICAgICAgICBpY29uOiBcInN1Y2Nlc3NcIixcclxuICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBtb2RhbC5oaWRlKCk7XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfSk7XHJcblxyXG4gICAgICAgICAgICAgICAgLy9mb3JtLnN1Ym1pdCgpOyAvLyBTdWJtaXQgZm9ybVxyXG4gICAgICAgICAgICB9LCAyMDAwKTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBmdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGluaXRVcGRhdGVEZXRhaWxzKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XHJcbiAgICBLVFVzZXJzVXBkYXRlRGV0YWlscy5pbml0KCk7XHJcbn0pOyJdLCJuYW1lcyI6WyJLVFVzZXJzVXBkYXRlRGV0YWlscyIsImVsZW1lbnQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiZm9ybSIsInF1ZXJ5U2VsZWN0b3IiLCJtb2RhbCIsImJvb3RzdHJhcCIsIk1vZGFsIiwiaW5pdFVwZGF0ZURldGFpbHMiLCJjbG9zZUJ1dHRvbiIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwicHJldmVudERlZmF1bHQiLCJTd2FsIiwiZmlyZSIsInRleHQiLCJpY29uIiwic2hvd0NhbmNlbEJ1dHRvbiIsImJ1dHRvbnNTdHlsaW5nIiwiY29uZmlybUJ1dHRvblRleHQiLCJjYW5jZWxCdXR0b25UZXh0IiwiY3VzdG9tQ2xhc3MiLCJjb25maXJtQnV0dG9uIiwiY2FuY2VsQnV0dG9uIiwidGhlbiIsInJlc3VsdCIsInZhbHVlIiwicmVzZXQiLCJoaWRlIiwiZGlzbWlzcyIsInN1Ym1pdEJ1dHRvbiIsInNldEF0dHJpYnV0ZSIsImRpc2FibGVkIiwic2V0VGltZW91dCIsInJlbW92ZUF0dHJpYnV0ZSIsImlzQ29uZmlybWVkIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/apps/user-management/users/view/update-details.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/apps/user-management/users/view/update-details.js"]();
/******/ 	
/******/ })()
;