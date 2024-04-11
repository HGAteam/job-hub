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

/***/ "./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js":
/*!******************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js ***!
  \******************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTUsersAddAuthApp = function () {\n  // Shared variables\n  var element = document.getElementById('kt_modal_add_auth_app');\n  var modal = new bootstrap.Modal(element);\n\n  // Init add schedule modal\n  var initAddAuthApp = function initAddAuthApp() {\n    // Close button handler\n    var closeButton = element.querySelector('[data-kt-users-modal-action=\"close\"]');\n    closeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to close?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, close it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          modal.hide(); // Hide modal\t\t\t\t\n        }\n      });\n    });\n  };\n\n  // QR code to text code swapper\n  var initCodeSwap = function initCodeSwap() {\n    var qrCode = element.querySelector('[ data-kt-add-auth-action=\"qr-code\"]');\n    var textCode = element.querySelector('[ data-kt-add-auth-action=\"text-code\"]');\n    var qrCodeButton = element.querySelector('[ data-kt-add-auth-action=\"qr-code-button\"]');\n    var textCodeButton = element.querySelector('[ data-kt-add-auth-action=\"text-code-button\"]');\n    var qrCodeLabel = element.querySelector('[ data-kt-add-auth-action=\"qr-code-label\"]');\n    var textCodeLabel = element.querySelector('[ data-kt-add-auth-action=\"text-code-label\"]');\n    var toggleClass = function toggleClass() {\n      qrCode.classList.toggle('d-none');\n      qrCodeButton.classList.toggle('d-none');\n      qrCodeLabel.classList.toggle('d-none');\n      textCode.classList.toggle('d-none');\n      textCodeButton.classList.toggle('d-none');\n      textCodeLabel.classList.toggle('d-none');\n    };\n\n    // Swap to text code handler\n    textCodeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      toggleClass();\n    });\n    qrCodeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      toggleClass();\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      initAddAuthApp();\n      initCodeSwap();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTUsersAddAuthApp.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvZWNvbW1lcmNlL2N1c3RvbWVycy9kZXRhaWxzL2FkZC1hdXRoLWFwcC5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLGlCQUFpQixHQUFHLFlBQVk7RUFDaEM7RUFDQSxJQUFNQyxPQUFPLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLHVCQUF1QixDQUFDO0VBQ2hFLElBQU1DLEtBQUssR0FBRyxJQUFJQyxTQUFTLENBQUNDLEtBQUssQ0FBQ0wsT0FBTyxDQUFDOztFQUUxQztFQUNBLElBQUlNLGNBQWMsR0FBRyxTQUFqQkEsY0FBY0EsQ0FBQSxFQUFTO0lBRXZCO0lBQ0EsSUFBTUMsV0FBVyxHQUFHUCxPQUFPLENBQUNRLGFBQWEsQ0FBQyxzQ0FBc0MsQ0FBQztJQUNqRkQsV0FBVyxDQUFDRSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBQUMsQ0FBQyxFQUFJO01BQ3ZDQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtNQUVsQkMsSUFBSSxDQUFDQyxJQUFJLENBQUM7UUFDTkMsSUFBSSxFQUFFLHVDQUF1QztRQUM3Q0MsSUFBSSxFQUFFLFNBQVM7UUFDZkMsZ0JBQWdCLEVBQUUsSUFBSTtRQUN0QkMsY0FBYyxFQUFFLEtBQUs7UUFDckJDLGlCQUFpQixFQUFFLGdCQUFnQjtRQUNuQ0MsZ0JBQWdCLEVBQUUsWUFBWTtRQUM5QkMsV0FBVyxFQUFFO1VBQ1RDLGFBQWEsRUFBRSxpQkFBaUI7VUFDaENDLFlBQVksRUFBRTtRQUNsQjtNQUNKLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMsVUFBVUMsTUFBTSxFQUFFO1FBQ3RCLElBQUlBLE1BQU0sQ0FBQ0MsS0FBSyxFQUFFO1VBQ2R0QixLQUFLLENBQUN1QixJQUFJLEVBQUUsQ0FBQyxDQUFDO1FBQ2xCO01BQ0osQ0FBQyxDQUFDO0lBQ04sQ0FBQyxDQUFDO0VBRU4sQ0FBQzs7RUFFRDtFQUNBLElBQUlDLFlBQVksR0FBRyxTQUFmQSxZQUFZQSxDQUFBLEVBQVM7SUFDckIsSUFBTUMsTUFBTSxHQUFHNUIsT0FBTyxDQUFDUSxhQUFhLENBQUMsc0NBQXNDLENBQUM7SUFDNUUsSUFBTXFCLFFBQVEsR0FBRzdCLE9BQU8sQ0FBQ1EsYUFBYSxDQUFDLHdDQUF3QyxDQUFDO0lBQ2hGLElBQU1zQixZQUFZLEdBQUc5QixPQUFPLENBQUNRLGFBQWEsQ0FBQyw2Q0FBNkMsQ0FBQztJQUN6RixJQUFNdUIsY0FBYyxHQUFHL0IsT0FBTyxDQUFDUSxhQUFhLENBQUMsK0NBQStDLENBQUM7SUFDN0YsSUFBTXdCLFdBQVcsR0FBR2hDLE9BQU8sQ0FBQ1EsYUFBYSxDQUFDLDRDQUE0QyxDQUFDO0lBQ3ZGLElBQU15QixhQUFhLEdBQUdqQyxPQUFPLENBQUNRLGFBQWEsQ0FBQyw4Q0FBOEMsQ0FBQztJQUUzRixJQUFNMEIsV0FBVyxHQUFHLFNBQWRBLFdBQVdBLENBQUEsRUFBUTtNQUNyQk4sTUFBTSxDQUFDTyxTQUFTLENBQUNDLE1BQU0sQ0FBQyxRQUFRLENBQUM7TUFDakNOLFlBQVksQ0FBQ0ssU0FBUyxDQUFDQyxNQUFNLENBQUMsUUFBUSxDQUFDO01BQ3ZDSixXQUFXLENBQUNHLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLFFBQVEsQ0FBQztNQUN0Q1AsUUFBUSxDQUFDTSxTQUFTLENBQUNDLE1BQU0sQ0FBQyxRQUFRLENBQUM7TUFDbkNMLGNBQWMsQ0FBQ0ksU0FBUyxDQUFDQyxNQUFNLENBQUMsUUFBUSxDQUFDO01BQ3pDSCxhQUFhLENBQUNFLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLFFBQVEsQ0FBQztJQUM1QyxDQUFDOztJQUVEO0lBQ0FMLGNBQWMsQ0FBQ3RCLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFBQyxDQUFDLEVBQUc7TUFDekNBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO01BRWxCdUIsV0FBVyxFQUFFO0lBQ2pCLENBQUMsQ0FBQztJQUVGSixZQUFZLENBQUNyQixnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBQUMsQ0FBQyxFQUFHO01BQ3ZDQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtNQUVsQnVCLFdBQVcsRUFBRTtJQUNqQixDQUFDLENBQUM7RUFDTixDQUFDO0VBRUQsT0FBTztJQUNIO0lBQ0FHLElBQUksRUFBRSxTQUFBQSxLQUFBLEVBQVk7TUFDZC9CLGNBQWMsRUFBRTtNQUNoQnFCLFlBQVksRUFBRTtJQUNsQjtFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQVcsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFZO0VBQ2xDeEMsaUJBQWlCLENBQUNzQyxJQUFJLEVBQUU7QUFDNUIsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9hcHBzL2Vjb21tZXJjZS9jdXN0b21lcnMvZGV0YWlscy9hZGQtYXV0aC1hcHAuanM/NzdhNSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtUVXNlcnNBZGRBdXRoQXBwID0gZnVuY3Rpb24gKCkge1xyXG4gICAgLy8gU2hhcmVkIHZhcmlhYmxlc1xyXG4gICAgY29uc3QgZWxlbWVudCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdrdF9tb2RhbF9hZGRfYXV0aF9hcHAnKTtcclxuICAgIGNvbnN0IG1vZGFsID0gbmV3IGJvb3RzdHJhcC5Nb2RhbChlbGVtZW50KTtcclxuXHJcbiAgICAvLyBJbml0IGFkZCBzY2hlZHVsZSBtb2RhbFxyXG4gICAgdmFyIGluaXRBZGRBdXRoQXBwID0gKCkgPT4ge1xyXG5cclxuICAgICAgICAvLyBDbG9zZSBidXR0b24gaGFuZGxlclxyXG4gICAgICAgIGNvbnN0IGNsb3NlQnV0dG9uID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1rdC11c2Vycy1tb2RhbC1hY3Rpb249XCJjbG9zZVwiXScpO1xyXG4gICAgICAgIGNsb3NlQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZSA9PiB7XHJcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcbiAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICB0ZXh0OiBcIkFyZSB5b3Ugc3VyZSB5b3Ugd291bGQgbGlrZSB0byBjbG9zZT9cIixcclxuICAgICAgICAgICAgICAgIGljb246IFwid2FybmluZ1wiLFxyXG4gICAgICAgICAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcclxuICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIlllcywgY2xvc2UgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiBcIk5vLCByZXR1cm5cIixcclxuICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvbjogXCJidG4gYnRuLXByaW1hcnlcIixcclxuICAgICAgICAgICAgICAgICAgICBjYW5jZWxCdXR0b246IFwiYnRuIGJ0bi1hY3RpdmUtbGlnaHRcIlxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXN1bHQpIHtcclxuICAgICAgICAgICAgICAgIGlmIChyZXN1bHQudmFsdWUpIHtcclxuICAgICAgICAgICAgICAgICAgICBtb2RhbC5oaWRlKCk7IC8vIEhpZGUgbW9kYWxcdFx0XHRcdFxyXG4gICAgICAgICAgICAgICAgfSBcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgfVxyXG5cclxuICAgIC8vIFFSIGNvZGUgdG8gdGV4dCBjb2RlIHN3YXBwZXJcclxuICAgIHZhciBpbml0Q29kZVN3YXAgPSAoKSA9PiB7XHJcbiAgICAgICAgY29uc3QgcXJDb2RlID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbIGRhdGEta3QtYWRkLWF1dGgtYWN0aW9uPVwicXItY29kZVwiXScpO1xyXG4gICAgICAgIGNvbnN0IHRleHRDb2RlID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbIGRhdGEta3QtYWRkLWF1dGgtYWN0aW9uPVwidGV4dC1jb2RlXCJdJyk7XHJcbiAgICAgICAgY29uc3QgcXJDb2RlQnV0dG9uID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbIGRhdGEta3QtYWRkLWF1dGgtYWN0aW9uPVwicXItY29kZS1idXR0b25cIl0nKTtcclxuICAgICAgICBjb25zdCB0ZXh0Q29kZUJ1dHRvbiA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignWyBkYXRhLWt0LWFkZC1hdXRoLWFjdGlvbj1cInRleHQtY29kZS1idXR0b25cIl0nKTtcclxuICAgICAgICBjb25zdCBxckNvZGVMYWJlbCA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignWyBkYXRhLWt0LWFkZC1hdXRoLWFjdGlvbj1cInFyLWNvZGUtbGFiZWxcIl0nKTtcclxuICAgICAgICBjb25zdCB0ZXh0Q29kZUxhYmVsID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbIGRhdGEta3QtYWRkLWF1dGgtYWN0aW9uPVwidGV4dC1jb2RlLWxhYmVsXCJdJyk7XHJcblxyXG4gICAgICAgIGNvbnN0IHRvZ2dsZUNsYXNzID0gKCkgPT57XHJcbiAgICAgICAgICAgIHFyQ29kZS5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICAgICAgcXJDb2RlQnV0dG9uLmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpO1xyXG4gICAgICAgICAgICBxckNvZGVMYWJlbC5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICAgICAgdGV4dENvZGUuY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XHJcbiAgICAgICAgICAgIHRleHRDb2RlQnV0dG9uLmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpO1xyXG4gICAgICAgICAgICB0ZXh0Q29kZUxhYmVsLmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgLy8gU3dhcCB0byB0ZXh0IGNvZGUgaGFuZGxlclxyXG4gICAgICAgIHRleHRDb2RlQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZSA9PntcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgdG9nZ2xlQ2xhc3MoKTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgcXJDb2RlQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZSA9PntcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgdG9nZ2xlQ2xhc3MoKTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBmdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGluaXRBZGRBdXRoQXBwKCk7XHJcbiAgICAgICAgICAgIGluaXRDb2RlU3dhcCgpO1xyXG4gICAgICAgIH1cclxuICAgIH07XHJcbn0oKTtcclxuXHJcbi8vIE9uIGRvY3VtZW50IHJlYWR5XHJcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xyXG4gICAgS1RVc2Vyc0FkZEF1dGhBcHAuaW5pdCgpO1xyXG59KTsiXSwibmFtZXMiOlsiS1RVc2Vyc0FkZEF1dGhBcHAiLCJlbGVtZW50IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsIm1vZGFsIiwiYm9vdHN0cmFwIiwiTW9kYWwiLCJpbml0QWRkQXV0aEFwcCIsImNsb3NlQnV0dG9uIiwicXVlcnlTZWxlY3RvciIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwicHJldmVudERlZmF1bHQiLCJTd2FsIiwiZmlyZSIsInRleHQiLCJpY29uIiwic2hvd0NhbmNlbEJ1dHRvbiIsImJ1dHRvbnNTdHlsaW5nIiwiY29uZmlybUJ1dHRvblRleHQiLCJjYW5jZWxCdXR0b25UZXh0IiwiY3VzdG9tQ2xhc3MiLCJjb25maXJtQnV0dG9uIiwiY2FuY2VsQnV0dG9uIiwidGhlbiIsInJlc3VsdCIsInZhbHVlIiwiaGlkZSIsImluaXRDb2RlU3dhcCIsInFyQ29kZSIsInRleHRDb2RlIiwicXJDb2RlQnV0dG9uIiwidGV4dENvZGVCdXR0b24iLCJxckNvZGVMYWJlbCIsInRleHRDb2RlTGFiZWwiLCJ0b2dnbGVDbGFzcyIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js"]();
/******/ 	
/******/ })()
;