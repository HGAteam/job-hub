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

/***/ "./resources/assets/core/js/custom/layout-builder/layout-builder.js":
/*!**************************************************************************!*\
  !*** ./resources/assets/core/js/custom/layout-builder/layout-builder.js ***!
  \**************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTLayoutBuilder = function () {\n  var form = document.querySelector(\"#kt_layout_builder_form\");\n  var actionInput = document.querySelector(\"#kt_layout_builder_action\");\n  var tabInput = document.querySelector(\"#kt_layout_builder_tab\");\n  var url = form.getAttribute(\"action\");\n  var previewButton = document.querySelector(\"#kt_layout_builder_preview\");\n  var exportButton = document.querySelector(\"#kt_layout_builder_export\");\n  var resetButton = document.querySelector(\"#kt_layout_builder_reset\");\n  var handleTab = function handleTab() {\n    var tabs = [].slice.call(document.querySelectorAll('#kt_layout_builder_tabs a[data-bs-toggle=\"tab\"]'));\n    tabs.forEach(function (tab) {\n      tab.addEventListener(\"shown.bs.tab\", function (e) {\n        tabInput.value = tab.getAttribute(\"href\").substring(1);\n      });\n    });\n  };\n  var handlePreview = function handlePreview() {\n    previewButton.addEventListener(\"click\", function (e) {\n      e.preventDefault();\n\n      // Set form action value\n      actionInput.value = \"preview\";\n\n      // Show progress\n      previewButton.setAttribute(\"data-kt-indicator\", \"on\");\n\n      // Prepare form data\n      var data = $(form).serialize();\n\n      // Submit\n      $.ajax({\n        type: \"POST\",\n        dataType: \"html\",\n        url: url,\n        data: data,\n        success: function success(response, status, xhr) {\n          toastr.success(\"Preview has been updated with current configured layout.\", \"Preview updated!\", {\n            timeOut: 0,\n            extendedTimeOut: 0,\n            closeButton: true,\n            closeDuration: 0\n          });\n          setTimeout(function () {\n            location.reload(); // reload page\n          }, 1500);\n        },\n        error: function error(response) {\n          toastr.error(\"Please try it again later.\", \"Something went wrong!\", {\n            timeOut: 0,\n            extendedTimeOut: 0,\n            closeButton: true,\n            closeDuration: 0\n          });\n        },\n        complete: function complete() {\n          previewButton.removeAttribute(\"data-kt-indicator\");\n        }\n      });\n    });\n  };\n  var handleExport = function handleExport() {\n    exportButton.addEventListener(\"click\", function (e) {\n      e.preventDefault();\n      toastr.success(\"Process has been started and it may take a while.\", \"Generating HTML!\", {\n        timeOut: 0,\n        extendedTimeOut: 0,\n        closeButton: true,\n        closeDuration: 0\n      });\n\n      // Show progress\n      exportButton.setAttribute(\"data-kt-indicator\", \"on\");\n\n      // Set form action value\n      actionInput.value = \"export\";\n\n      // Prepare form data\n      var data = $(form).serialize();\n      $.ajax({\n        type: \"POST\",\n        dataType: \"html\",\n        url: url,\n        data: data,\n        success: function success(response, status, xhr) {\n          var timer = setInterval(function () {\n            $(\"<iframe/>\").attr({\n              src: url + \"?layout-builder[action]=export&download=1&output=\" + response,\n              style: \"visibility:hidden;display:none\"\n            }).ready(function () {\n              // Stop the timer\n              clearInterval(timer);\n              exportButton.removeAttribute(\"data-kt-indicator\");\n            }).appendTo(\"body\");\n          }, 3000);\n        },\n        error: function error(response) {\n          toastr.error(\"Please try it again later.\", \"Something went wrong!\", {\n            timeOut: 0,\n            extendedTimeOut: 0,\n            closeButton: true,\n            closeDuration: 0\n          });\n          exportButton.removeAttribute(\"data-kt-indicator\");\n        }\n      });\n    });\n  };\n  var handleReset = function handleReset() {\n    resetButton.addEventListener(\"click\", function (e) {\n      e.preventDefault();\n\n      // Show progress\n      resetButton.setAttribute(\"data-kt-indicator\", \"on\");\n\n      // Set form action value\n      actionInput.value = \"reset\";\n\n      // Prepare form data\n      var data = $(form).serialize();\n      $.ajax({\n        type: \"POST\",\n        dataType: \"html\",\n        url: url,\n        data: data,\n        success: function success(response, status, xhr) {\n          toastr.success(\"Preview has been successfully reset and the page will be reloaded.\", \"Reset Preview!\", {\n            timeOut: 0,\n            extendedTimeOut: 0,\n            closeButton: true,\n            closeDuration: 0\n          });\n          setTimeout(function () {\n            location.reload(); // reload page\n          }, 1500);\n        },\n        error: function error(response) {\n          toastr.error(\"Please try it again later.\", \"Something went wrong!\", {\n            timeOut: 0,\n            extendedTimeOut: 0,\n            closeButton: true,\n            closeDuration: 0\n          });\n        },\n        complete: function complete() {\n          resetButton.removeAttribute(\"data-kt-indicator\");\n        }\n      });\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      handlePreview();\n      handleExport();\n      handleReset();\n      handleTab();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTLayoutBuilder.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2xheW91dC1idWlsZGVyL2xheW91dC1idWlsZGVyLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsZUFBZSxHQUFHLFlBQVc7RUFDaEMsSUFBSUMsSUFBSSxHQUFHQyxRQUFRLENBQUNDLGFBQWEsQ0FBQyx5QkFBeUIsQ0FBQztFQUM1RCxJQUFJQyxXQUFXLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLDJCQUEyQixDQUFDO0VBQ3JFLElBQUlFLFFBQVEsR0FBR0gsUUFBUSxDQUFDQyxhQUFhLENBQUMsd0JBQXdCLENBQUM7RUFDL0QsSUFBSUcsR0FBRyxHQUFHTCxJQUFJLENBQUNNLFlBQVksQ0FBQyxRQUFRLENBQUM7RUFFckMsSUFBSUMsYUFBYSxHQUFHTixRQUFRLENBQUNDLGFBQWEsQ0FBQyw0QkFBNEIsQ0FBQztFQUN4RSxJQUFJTSxZQUFZLEdBQUdQLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLDJCQUEyQixDQUFDO0VBQ3RFLElBQUlPLFdBQVcsR0FBR1IsUUFBUSxDQUFDQyxhQUFhLENBQUMsMEJBQTBCLENBQUM7RUFFcEUsSUFBSVEsU0FBUyxHQUFHLFNBQVpBLFNBQVNBLENBQUEsRUFBYztJQUMxQixJQUFJQyxJQUFJLEdBQUcsRUFBRSxDQUFDQyxLQUFLLENBQUNDLElBQUksQ0FBQ1osUUFBUSxDQUFDYSxnQkFBZ0IsQ0FBQyxpREFBaUQsQ0FBQyxDQUFDO0lBRXRHSCxJQUFJLENBQUNJLE9BQU8sQ0FBQyxVQUFVQyxHQUFHLEVBQUU7TUFDM0JBLEdBQUcsQ0FBQ0MsZ0JBQWdCLENBQUMsY0FBYyxFQUFFLFVBQVVDLENBQUMsRUFBRTtRQUNqRGQsUUFBUSxDQUFDZSxLQUFLLEdBQUdILEdBQUcsQ0FBQ1YsWUFBWSxDQUFDLE1BQU0sQ0FBQyxDQUFDYyxTQUFTLENBQUMsQ0FBQyxDQUFDO01BQ3ZELENBQUMsQ0FBQztJQUNILENBQUMsQ0FBQztFQUNILENBQUM7RUFF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QVNDLFFBQVEsRUFBRUMsTUFBTSxFQUFFQyxHQUFHLEVBQUU7VUFDeENDLE1BQU0sQ0FBQ0osT0FBTyxDQUNiLG9FQUFvRSxFQUNwRSxnQkFBZ0IsRUFDaEI7WUFBQ0ssT0FBTyxFQUFFLENBQUM7WUFBRUMsZUFBZSxFQUFFLENBQUM7WUFBRUMsV0FBVyxFQUFFLElBQUk7WUFBRUMsYUFBYSxFQUFFO1VBQUMsQ0FBQyxDQUNyRTtVQUVEQyxVQUFVLENBQUMsWUFBVztZQUNyQkMsUUFBUSxDQUFDQyxNQUFNLEVBQUUsQ0FBQyxDQUFDO1VBQ3BCLENBQUMsRUFBRSxJQUFJLENBQUM7UUFDVCxDQUFDO1FBQ0RDLEtBQUssRUFBRSxTQUFBQSxNQUFTWCxRQUFRLEVBQUU7VUFDekJHLE1BQU0sQ0FBQ1EsS0FBSyxDQUNYLDRCQUE0QixFQUM1Qix1QkFBdUIsRUFDdkI7WUFBQ1AsT0FBTyxFQUFFLENBQUM7WUFBRUMsZUFBZSxFQUFFLENBQUM7WUFBRUMsV0FBVyxFQUFFLElBQUk7WUFBRUMsYUFBYSxFQUFFO1VBQUMsQ0FBQyxDQUNyRTtRQUNGLENBQUM7UUFDREssUUFBUSxFQUFFLFNBQUFBLFNBQUEsRUFBVztVQUNwQmxDLFdBQVcsQ0FBQ21DLGVBQWUsQ0FBQyxtQkFBbUIsQ0FBQztRQUNqRDtNQUNELENBQUMsQ0FBQztJQUNILENBQUMsQ0FBQztFQUNILENBQUM7RUFFRCxPQUFPO0lBQ047SUFDQVcsSUFBSSxFQUFFLFNBQUFBLEtBQUEsRUFBVztNQUNoQmxDLGFBQWEsRUFBRTtNQUNmd0IsWUFBWSxFQUFFO01BQ2RTLFdBQVcsRUFBRTtNQUNiNUMsU0FBUyxFQUFFO0lBQ1o7RUFDRCxDQUFDO0FBQ0YsQ0FBQyxFQUFFOztBQUVIO0FBQ0E4QyxNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVc7RUFDakMxRCxlQUFlLENBQUN3RCxJQUFJLEVBQUU7QUFDMUIsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9sYXlvdXQtYnVpbGRlci9sYXlvdXQtYnVpbGRlci5qcz85OWMyIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RMYXlvdXRCdWlsZGVyID0gZnVuY3Rpb24oKSB7XHJcblx0dmFyIGZvcm0gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2t0X2xheW91dF9idWlsZGVyX2Zvcm1cIik7XHJcblx0dmFyIGFjdGlvbklucHV0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNrdF9sYXlvdXRfYnVpbGRlcl9hY3Rpb25cIik7XHJcblx0dmFyIHRhYklucHV0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNrdF9sYXlvdXRfYnVpbGRlcl90YWJcIik7XHRcclxuXHR2YXIgdXJsID0gZm9ybS5nZXRBdHRyaWJ1dGUoXCJhY3Rpb25cIik7XHJcblxyXG5cdHZhciBwcmV2aWV3QnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNrdF9sYXlvdXRfYnVpbGRlcl9wcmV2aWV3XCIpO1xyXG5cdHZhciBleHBvcnRCdXR0b24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2t0X2xheW91dF9idWlsZGVyX2V4cG9ydFwiKTtcclxuXHR2YXIgcmVzZXRCdXR0b24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2t0X2xheW91dF9idWlsZGVyX3Jlc2V0XCIpO1xyXG5cclxuXHR2YXIgaGFuZGxlVGFiID0gZnVuY3Rpb24oKSB7XHJcblx0XHR2YXIgdGFicyA9IFtdLnNsaWNlLmNhbGwoZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnI2t0X2xheW91dF9idWlsZGVyX3RhYnMgYVtkYXRhLWJzLXRvZ2dsZT1cInRhYlwiXScpKTtcclxuXHJcblx0XHR0YWJzLmZvckVhY2goZnVuY3Rpb24gKHRhYikge1xyXG5cdFx0XHR0YWIuYWRkRXZlbnRMaXN0ZW5lcihcInNob3duLmJzLnRhYlwiLCBmdW5jdGlvbiAoZSkge1xyXG5cdFx0XHRcdHRhYklucHV0LnZhbHVlID0gdGFiLmdldEF0dHJpYnV0ZShcImhyZWZcIikuc3Vic3RyaW5nKDEpO1xyXG5cdFx0XHR9KTtcclxuXHRcdH0pO1xyXG5cdH07XHJcblxyXG5cdHZhciBoYW5kbGVQcmV2aWV3ID0gZnVuY3Rpb24oKSB7XHJcblx0XHRwcmV2aWV3QnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbihlKSB7XHJcblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcblx0XHRcdC8vIFNldCBmb3JtIGFjdGlvbiB2YWx1ZVxyXG5cdFx0XHRhY3Rpb25JbnB1dC52YWx1ZSA9IFwicHJldmlld1wiO1xyXG5cclxuXHRcdFx0Ly8gU2hvdyBwcm9ncmVzc1xyXG5cdFx0XHRwcmV2aWV3QnV0dG9uLnNldEF0dHJpYnV0ZShcImRhdGEta3QtaW5kaWNhdG9yXCIsIFwib25cIik7XHJcblxyXG5cdFx0XHQvLyBQcmVwYXJlIGZvcm0gZGF0YVxyXG5cdFx0XHR2YXIgZGF0YSA9ICQoZm9ybSkuc2VyaWFsaXplKCk7XHJcblxyXG5cdFx0XHQvLyBTdWJtaXRcclxuXHRcdFx0JC5hamF4KHtcclxuXHRcdFx0XHR0eXBlOiBcIlBPU1RcIixcclxuXHRcdFx0XHRkYXRhVHlwZTogXCJodG1sXCIsXHJcblx0XHRcdFx0dXJsOiB1cmwsXHJcblx0XHRcdFx0ZGF0YTogZGF0YSxcclxuXHRcdFx0XHRzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSwgc3RhdHVzLCB4aHIpIHtcclxuXHRcdFx0XHRcdHRvYXN0ci5zdWNjZXNzKFxyXG5cdFx0XHRcdFx0XHRcIlByZXZpZXcgaGFzIGJlZW4gdXBkYXRlZCB3aXRoIGN1cnJlbnQgY29uZmlndXJlZCBsYXlvdXQuXCIsIFxyXG5cdFx0XHRcdFx0XHRcIlByZXZpZXcgdXBkYXRlZCFcIiwgXHJcblx0XHRcdFx0XHRcdHt0aW1lT3V0OiAwLCBleHRlbmRlZFRpbWVPdXQ6IDAsIGNsb3NlQnV0dG9uOiB0cnVlLCBjbG9zZUR1cmF0aW9uOiAwfVxyXG5cdFx0XHRcdFx0KTtcclxuXHJcblx0XHRcdFx0XHRzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xyXG5cdFx0XHRcdFx0XHRsb2NhdGlvbi5yZWxvYWQoKTsgLy8gcmVsb2FkIHBhZ2VcclxuXHRcdFx0XHRcdH0sIDE1MDApO1xyXG5cdFx0XHRcdH0sXHJcblx0XHRcdFx0ZXJyb3I6IGZ1bmN0aW9uKHJlc3BvbnNlKSB7XHJcblx0XHRcdFx0XHR0b2FzdHIuZXJyb3IoXHJcblx0XHRcdFx0XHRcdFwiUGxlYXNlIHRyeSBpdCBhZ2FpbiBsYXRlci5cIiwgXHJcblx0XHRcdFx0XHRcdFwiU29tZXRoaW5nIHdlbnQgd3JvbmchXCIsIFxyXG5cdFx0XHRcdFx0XHR7dGltZU91dDogMCwgZXh0ZW5kZWRUaW1lT3V0OiAwLCBjbG9zZUJ1dHRvbjogdHJ1ZSwgY2xvc2VEdXJhdGlvbjogMH1cclxuXHRcdFx0XHRcdCk7XHJcblx0XHRcdFx0fSxcclxuXHRcdFx0XHRjb21wbGV0ZTogZnVuY3Rpb24oKSB7XHJcblx0XHRcdFx0XHRwcmV2aWV3QnV0dG9uLnJlbW92ZUF0dHJpYnV0ZShcImRhdGEta3QtaW5kaWNhdG9yXCIpO1xyXG5cdFx0XHRcdH1cclxuXHRcdFx0fSk7XHJcblx0XHR9KTtcclxuXHR9O1xyXG5cclxuXHR2YXIgaGFuZGxlRXhwb3J0ID0gZnVuY3Rpb24oKSB7XHJcblx0XHRleHBvcnRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uKGUpIHtcclxuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuXHRcdFx0dG9hc3RyLnN1Y2Nlc3MoXHJcblx0XHRcdFx0XCJQcm9jZXNzIGhhcyBiZWVuIHN0YXJ0ZWQgYW5kIGl0IG1heSB0YWtlIGEgd2hpbGUuXCIsIFxyXG5cdFx0XHRcdFwiR2VuZXJhdGluZyBIVE1MIVwiLCBcclxuXHRcdFx0XHR7dGltZU91dDogMCwgZXh0ZW5kZWRUaW1lT3V0OiAwLCBjbG9zZUJ1dHRvbjogdHJ1ZSwgY2xvc2VEdXJhdGlvbjogMH1cclxuXHRcdFx0KTtcclxuXHJcblx0XHRcdC8vIFNob3cgcHJvZ3Jlc3NcclxuXHRcdFx0ZXhwb3J0QnV0dG9uLnNldEF0dHJpYnV0ZShcImRhdGEta3QtaW5kaWNhdG9yXCIsIFwib25cIik7XHJcblxyXG5cdFx0XHQvLyBTZXQgZm9ybSBhY3Rpb24gdmFsdWVcclxuXHRcdFx0YWN0aW9uSW5wdXQudmFsdWUgPSBcImV4cG9ydFwiO1xyXG5cdFx0XHRcclxuXHRcdFx0Ly8gUHJlcGFyZSBmb3JtIGRhdGFcclxuXHRcdFx0dmFyIGRhdGEgPSAkKGZvcm0pLnNlcmlhbGl6ZSgpO1xyXG5cclxuXHRcdFx0JC5hamF4KHtcclxuXHRcdFx0XHR0eXBlOiBcIlBPU1RcIixcclxuXHRcdFx0XHRkYXRhVHlwZTogXCJodG1sXCIsXHJcblx0XHRcdFx0dXJsOiB1cmwsXHJcblx0XHRcdFx0ZGF0YTogZGF0YSxcclxuXHRcdFx0XHRzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSwgc3RhdHVzLCB4aHIpIHtcclxuXHRcdFx0XHRcdHZhciB0aW1lciA9IHNldEludGVydmFsKGZ1bmN0aW9uKCkge1xyXG5cdFx0XHRcdFx0XHQkKFwiPGlmcmFtZS8+XCIpLmF0dHIoe1xyXG5cdFx0XHRcdFx0XHRcdHNyYzogdXJsICsgXCI/bGF5b3V0LWJ1aWxkZXJbYWN0aW9uXT1leHBvcnQmZG93bmxvYWQ9MSZvdXRwdXQ9XCIgKyByZXNwb25zZSxcclxuXHRcdFx0XHRcdFx0XHRzdHlsZTogXCJ2aXNpYmlsaXR5OmhpZGRlbjtkaXNwbGF5Om5vbmVcIixcclxuXHRcdFx0XHRcdFx0fSkucmVhZHkoZnVuY3Rpb24oKSB7XHJcblx0XHRcdFx0XHRcdFx0Ly8gU3RvcCB0aGUgdGltZXJcclxuXHRcdFx0XHRcdFx0XHRjbGVhckludGVydmFsKHRpbWVyKTtcclxuXHJcblx0XHRcdFx0XHRcdFx0ZXhwb3J0QnV0dG9uLnJlbW92ZUF0dHJpYnV0ZShcImRhdGEta3QtaW5kaWNhdG9yXCIpO1xyXG5cdFx0XHRcdFx0XHR9KS5hcHBlbmRUbyhcImJvZHlcIik7XHJcblx0XHRcdFx0XHR9LCAzMDAwKTtcclxuXHRcdFx0XHR9LFxyXG5cdFx0XHRcdGVycm9yOiBmdW5jdGlvbihyZXNwb25zZSkge1xyXG5cdFx0XHRcdFx0dG9hc3RyLmVycm9yKFxyXG5cdFx0XHRcdFx0XHRcIlBsZWFzZSB0cnkgaXQgYWdhaW4gbGF0ZXIuXCIsIFxyXG5cdFx0XHRcdFx0XHRcIlNvbWV0aGluZyB3ZW50IHdyb25nIVwiLCBcclxuXHRcdFx0XHRcdFx0e3RpbWVPdXQ6IDAsIGV4dGVuZGVkVGltZU91dDogMCwgY2xvc2VCdXR0b246IHRydWUsIGNsb3NlRHVyYXRpb246IDB9XHJcblx0XHRcdFx0XHQpO1xyXG5cclxuXHRcdFx0XHRcdGV4cG9ydEJ1dHRvbi5yZW1vdmVBdHRyaWJ1dGUoXCJkYXRhLWt0LWluZGljYXRvclwiKTtcclxuXHRcdFx0XHR9LFxyXG5cdFx0XHR9KTtcclxuXHRcdH0pO1xyXG5cdH07XHJcblxyXG5cdHZhciBoYW5kbGVSZXNldCA9IGZ1bmN0aW9uKCkge1xyXG5cdFx0cmVzZXRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uKGUpIHtcclxuXHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuXHRcdFx0Ly8gU2hvdyBwcm9ncmVzc1xyXG5cdFx0XHRyZXNldEJ1dHRvbi5zZXRBdHRyaWJ1dGUoXCJkYXRhLWt0LWluZGljYXRvclwiLCBcIm9uXCIpO1xyXG5cclxuXHRcdFx0Ly8gU2V0IGZvcm0gYWN0aW9uIHZhbHVlXHJcblx0XHRcdGFjdGlvbklucHV0LnZhbHVlID0gXCJyZXNldFwiO1xyXG5cdFx0XHRcclxuXHRcdFx0Ly8gUHJlcGFyZSBmb3JtIGRhdGFcclxuXHRcdFx0dmFyIGRhdGEgPSAkKGZvcm0pLnNlcmlhbGl6ZSgpO1xyXG5cclxuXHRcdFx0JC5hamF4KHtcclxuXHRcdFx0XHR0eXBlOiBcIlBPU1RcIixcclxuXHRcdFx0XHRkYXRhVHlwZTogXCJodG1sXCIsXHJcblx0XHRcdFx0dXJsOiB1cmwsXHJcblx0XHRcdFx0ZGF0YTogZGF0YSxcclxuXHRcdFx0XHRzdWNjZXNzOiBmdW5jdGlvbihyZXNwb25zZSwgc3RhdHVzLCB4aHIpIHtcclxuXHRcdFx0XHRcdHRvYXN0ci5zdWNjZXNzKFxyXG5cdFx0XHRcdFx0XHRcIlByZXZpZXcgaGFzIGJlZW4gc3VjY2Vzc2Z1bGx5IHJlc2V0IGFuZCB0aGUgcGFnZSB3aWxsIGJlIHJlbG9hZGVkLlwiLCBcclxuXHRcdFx0XHRcdFx0XCJSZXNldCBQcmV2aWV3IVwiLCBcclxuXHRcdFx0XHRcdFx0e3RpbWVPdXQ6IDAsIGV4dGVuZGVkVGltZU91dDogMCwgY2xvc2VCdXR0b246IHRydWUsIGNsb3NlRHVyYXRpb246IDB9XHJcblx0XHRcdFx0XHQpO1xyXG5cclxuXHRcdFx0XHRcdHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XHJcblx0XHRcdFx0XHRcdGxvY2F0aW9uLnJlbG9hZCgpOyAvLyByZWxvYWQgcGFnZVxyXG5cdFx0XHRcdFx0fSwgMTUwMCk7XHJcblx0XHRcdFx0fSxcclxuXHRcdFx0XHRlcnJvcjogZnVuY3Rpb24ocmVzcG9uc2UpIHtcclxuXHRcdFx0XHRcdHRvYXN0ci5lcnJvcihcclxuXHRcdFx0XHRcdFx0XCJQbGVhc2UgdHJ5IGl0IGFnYWluIGxhdGVyLlwiLCBcclxuXHRcdFx0XHRcdFx0XCJTb21ldGhpbmcgd2VudCB3cm9uZyFcIiwgXHJcblx0XHRcdFx0XHRcdHt0aW1lT3V0OiAwLCBleHRlbmRlZFRpbWVPdXQ6IDAsIGNsb3NlQnV0dG9uOiB0cnVlLCBjbG9zZUR1cmF0aW9uOiAwfVxyXG5cdFx0XHRcdFx0KTtcclxuXHRcdFx0XHR9LFxyXG5cdFx0XHRcdGNvbXBsZXRlOiBmdW5jdGlvbigpIHtcclxuXHRcdFx0XHRcdHJlc2V0QnV0dG9uLnJlbW92ZUF0dHJpYnV0ZShcImRhdGEta3QtaW5kaWNhdG9yXCIpO1xyXG5cdFx0XHRcdH0sXHJcblx0XHRcdH0pO1xyXG5cdFx0fSk7XHJcblx0fTtcclxuXHJcblx0cmV0dXJuIHtcclxuXHRcdC8vIFB1YmxpYyBmdW5jdGlvbnNcclxuXHRcdGluaXQ6IGZ1bmN0aW9uKCkge1xyXG5cdFx0XHRoYW5kbGVQcmV2aWV3KCk7XHJcblx0XHRcdGhhbmRsZUV4cG9ydCgpO1xyXG5cdFx0XHRoYW5kbGVSZXNldCgpO1xyXG5cdFx0XHRoYW5kbGVUYWIoKTtcclxuXHRcdH1cclxuXHR9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RMYXlvdXRCdWlsZGVyLmluaXQoKTtcclxufSk7Il0sIm5hbWVzIjpbIktUTGF5b3V0QnVpbGRlciIsImZvcm0iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJhY3Rpb25JbnB1dCIsInRhYklucHV0IiwidXJsIiwiZ2V0QXR0cmlidXRlIiwicHJldmlld0J1dHRvbiIsImV4cG9ydEJ1dHRvbiIsInJlc2V0QnV0dG9uIiwiaGFuZGxlVGFiIiwidGFicyIsInNsaWNlIiwiY2FsbCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwidGFiIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJ2YWx1ZSIsInN1YnN0cmluZyIsImhhbmRsZVByZXZpZXciLCJwcmV2ZW50RGVmYXVsdCIsInNldEF0dHJpYnV0ZSIsImRhdGEiLCIkIiwic2VyaWFsaXplIiwiYWpheCIsInR5cGUiLCJkYXRhVHlwZSIsInN1Y2Nlc3MiLCJyZXNwb25zZSIsInN0YXR1cyIsInhociIsInRvYXN0ciIsInRpbWVPdXQiLCJleHRlbmRlZFRpbWVPdXQiLCJjbG9zZUJ1dHRvbiIsImNsb3NlRHVyYXRpb24iLCJzZXRUaW1lb3V0IiwibG9jYXRpb24iLCJyZWxvYWQiLCJlcnJvciIsImNvbXBsZXRlIiwicmVtb3ZlQXR0cmlidXRlIiwiaGFuZGxlRXhwb3J0IiwidGltZXIiLCJzZXRJbnRlcnZhbCIsImF0dHIiLCJzcmMiLCJzdHlsZSIsInJlYWR5IiwiY2xlYXJJbnRlcnZhbCIsImFwcGVuZFRvIiwiaGFuZGxlUmVzZXQiLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/layout-builder/layout-builder.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/layout-builder/layout-builder.js"]();
/******/ 	
/******/ })()
;