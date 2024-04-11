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

/***/ "./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js":
/*!********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js ***!
  \********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsTinyMCEBasic = function () {\n  // Private functions\n  var exampleBasic = function exampleBasic() {\n    var options = {\n      selector: '#kt_docs_tinymce_basic'\n    };\n    if (KTApp.isDarkMode()) {\n      options['skin'] = 'oxide-dark';\n      options['content_css'] = 'dark';\n    }\n    tinymce.init(options);\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleBasic();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsTinyMCEBasic.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZWRpdG9ycy90aW55bWNlL2Jhc2ljLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsbUJBQW1CLEdBQUcsWUFBVztFQUNqQztFQUNBLElBQUlDLFlBQVksR0FBRyxTQUFmQSxZQUFZQSxDQUFBLEVBQWM7SUFDMUIsSUFBSUMsT0FBTyxHQUFHO01BQUNDLFFBQVEsRUFBRTtJQUF3QixDQUFDO0lBRWxELElBQUlDLEtBQUssQ0FBQ0MsVUFBVSxFQUFFLEVBQUU7TUFDcEJILE9BQU8sQ0FBQyxNQUFNLENBQUMsR0FBRyxZQUFZO01BQzlCQSxPQUFPLENBQUMsYUFBYSxDQUFDLEdBQUcsTUFBTTtJQUNuQztJQUVBSSxPQUFPLENBQUNDLElBQUksQ0FBQ0wsT0FBTyxDQUFDO0VBQ3pCLENBQUM7RUFFRCxPQUFPO0lBQ0g7SUFDQUssSUFBSSxFQUFFLFNBQUFBLEtBQUEsRUFBVztNQUNiTixZQUFZLEVBQUU7SUFDbEI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0FPLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBVztFQUNqQ1QsbUJBQW1CLENBQUNPLElBQUksRUFBRTtBQUM5QixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZWRpdG9ycy90aW55bWNlL2Jhc2ljLmpzPzBiYjkiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVEZvcm1zVGlueU1DRUJhc2ljID0gZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGVCYXNpYyA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIHZhciBvcHRpb25zID0ge3NlbGVjdG9yOiAnI2t0X2RvY3NfdGlueW1jZV9iYXNpYyd9O1xyXG4gICAgICAgIFxyXG4gICAgICAgIGlmIChLVEFwcC5pc0RhcmtNb2RlKCkpIHtcclxuICAgICAgICAgICAgb3B0aW9uc1snc2tpbiddID0gJ294aWRlLWRhcmsnO1xyXG4gICAgICAgICAgICBvcHRpb25zWydjb250ZW50X2NzcyddID0gJ2RhcmsnO1xyXG4gICAgICAgIH1cclxuICAgICAgICBcclxuICAgICAgICB0aW55bWNlLmluaXQob3B0aW9ucyk7XHJcbiAgICB9XHJcblxyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGV4YW1wbGVCYXNpYygpO1xyXG4gICAgICAgIH1cclxuICAgIH07XHJcbn0oKTtcclxuXHJcbi8vIE9uIGRvY3VtZW50IHJlYWR5XHJcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24oKSB7XHJcbiAgICBLVEZvcm1zVGlueU1DRUJhc2ljLmluaXQoKTtcclxufSk7XHJcbiJdLCJuYW1lcyI6WyJLVEZvcm1zVGlueU1DRUJhc2ljIiwiZXhhbXBsZUJhc2ljIiwib3B0aW9ucyIsInNlbGVjdG9yIiwiS1RBcHAiLCJpc0RhcmtNb2RlIiwidGlueW1jZSIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js"]();
/******/ 	
/******/ })()
;