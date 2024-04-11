/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/textcolor/index.js":
/*!*********************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/textcolor/index.js ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("// Exports the \"textcolor\" plugin for usage with module loaders\n// Usage:\n//   CommonJS:\n//     require('tinymce/plugins/textcolor')\n//   ES2015:\n//     import 'tinymce/plugins/textcolor'\n__webpack_require__(/*! ./plugin.js */ \"./resources/assets/core/plugins/custom/tinymce/plugins/textcolor/plugin.js\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL3RleHRjb2xvci9pbmRleC5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQUEsbUJBQU8sQ0FBQywrRkFBYSxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL3BsdWdpbnMvY3VzdG9tL3RpbnltY2UvcGx1Z2lucy90ZXh0Y29sb3IvaW5kZXguanM/YjlhMSJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBFeHBvcnRzIHRoZSBcInRleHRjb2xvclwiIHBsdWdpbiBmb3IgdXNhZ2Ugd2l0aCBtb2R1bGUgbG9hZGVyc1xyXG4vLyBVc2FnZTpcclxuLy8gICBDb21tb25KUzpcclxuLy8gICAgIHJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy90ZXh0Y29sb3InKVxyXG4vLyAgIEVTMjAxNTpcclxuLy8gICAgIGltcG9ydCAndGlueW1jZS9wbHVnaW5zL3RleHRjb2xvcidcclxucmVxdWlyZSgnLi9wbHVnaW4uanMnKTsiXSwibmFtZXMiOlsicmVxdWlyZSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/textcolor/index.js\n");

/***/ }),

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/textcolor/plugin.js":
/*!**********************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/textcolor/plugin.js ***!
  \**********************************************************************************/
/***/ (() => {

eval("/**\r\n * Copyright (c) Tiny Technologies, Inc. All rights reserved.\r\n * Licensed under the LGPL or a commercial license.\r\n * For LGPL see License.txt in the project root for license information.\r\n * For commercial licenses see https://www.tiny.cloud/\r\n *\r\n * Version: 5.10.7 (2022-12-06)\r\n */\n(function () {\n  'use strict';\n\n  var global = tinymce.util.Tools.resolve('tinymce.PluginManager');\n  function Plugin() {\n    global.add('textcolor', function () {});\n  }\n  Plugin();\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJnbG9iYWwiLCJ0aW55bWNlIiwidXRpbCIsIlRvb2xzIiwicmVzb2x2ZSIsIlBsdWdpbiIsImFkZCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL3RleHRjb2xvci9wbHVnaW4uanM/OWJmNSJdLCJzb3VyY2VzQ29udGVudCI6WyIvKipcclxuICogQ29weXJpZ2h0IChjKSBUaW55IFRlY2hub2xvZ2llcywgSW5jLiBBbGwgcmlnaHRzIHJlc2VydmVkLlxyXG4gKiBMaWNlbnNlZCB1bmRlciB0aGUgTEdQTCBvciBhIGNvbW1lcmNpYWwgbGljZW5zZS5cclxuICogRm9yIExHUEwgc2VlIExpY2Vuc2UudHh0IGluIHRoZSBwcm9qZWN0IHJvb3QgZm9yIGxpY2Vuc2UgaW5mb3JtYXRpb24uXHJcbiAqIEZvciBjb21tZXJjaWFsIGxpY2Vuc2VzIHNlZSBodHRwczovL3d3dy50aW55LmNsb3VkL1xyXG4gKlxyXG4gKiBWZXJzaW9uOiA1LjEwLjcgKDIwMjItMTItMDYpXHJcbiAqL1xyXG4oZnVuY3Rpb24gKCkge1xyXG4gICAgJ3VzZSBzdHJpY3QnO1xyXG5cclxuICAgIHZhciBnbG9iYWwgPSB0aW55bWNlLnV0aWwuVG9vbHMucmVzb2x2ZSgndGlueW1jZS5QbHVnaW5NYW5hZ2VyJyk7XHJcblxyXG4gICAgZnVuY3Rpb24gUGx1Z2luICgpIHtcclxuICAgICAgZ2xvYmFsLmFkZCgndGV4dGNvbG9yJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICBQbHVnaW4oKTtcclxuXHJcbn0oKSk7XHJcbiJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNDLGFBQVk7RUFDVCxZQUFZOztFQUVaLElBQUlBLE1BQU0sR0FBR0MsT0FBTyxDQUFDQyxJQUFJLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxDQUFDLHVCQUF1QixDQUFDO0VBRWhFLFNBQVNDLE1BQU1BLENBQUEsRUFBSTtJQUNqQkwsTUFBTSxDQUFDTSxHQUFHLENBQUMsV0FBVyxFQUFFLFlBQVksQ0FDcEMsQ0FBQyxDQUFDO0VBQ0o7RUFFQUQsTUFBTSxFQUFFO0FBRVosQ0FBQyxHQUFFIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL3BsdWdpbnMvY3VzdG9tL3RpbnltY2UvcGx1Z2lucy90ZXh0Y29sb3IvcGx1Z2luLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/textcolor/plugin.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/core/plugins/custom/tinymce/plugins/textcolor/index.js");
/******/ 	
/******/ })()
;