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

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/colorpicker/index.js":
/*!***********************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/colorpicker/index.js ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("// Exports the \"colorpicker\" plugin for usage with module loaders\n// Usage:\n//   CommonJS:\n//     require('tinymce/plugins/colorpicker')\n//   ES2015:\n//     import 'tinymce/plugins/colorpicker'\n__webpack_require__(/*! ./plugin.js */ \"./resources/assets/core/plugins/custom/tinymce/plugins/colorpicker/plugin.js\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL2NvbG9ycGlja2VyL2luZGV4LmpzLmpzIiwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBQSxtQkFBTyxDQUFDLGlHQUFhLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL2NvbG9ycGlja2VyL2luZGV4LmpzPzllNjciXSwic291cmNlc0NvbnRlbnQiOlsiLy8gRXhwb3J0cyB0aGUgXCJjb2xvcnBpY2tlclwiIHBsdWdpbiBmb3IgdXNhZ2Ugd2l0aCBtb2R1bGUgbG9hZGVyc1xyXG4vLyBVc2FnZTpcclxuLy8gICBDb21tb25KUzpcclxuLy8gICAgIHJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9jb2xvcnBpY2tlcicpXHJcbi8vICAgRVMyMDE1OlxyXG4vLyAgICAgaW1wb3J0ICd0aW55bWNlL3BsdWdpbnMvY29sb3JwaWNrZXInXHJcbnJlcXVpcmUoJy4vcGx1Z2luLmpzJyk7Il0sIm5hbWVzIjpbInJlcXVpcmUiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/colorpicker/index.js\n");

/***/ }),

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/colorpicker/plugin.js":
/*!************************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/colorpicker/plugin.js ***!
  \************************************************************************************/
/***/ (() => {

eval("/**\r\n * Copyright (c) Tiny Technologies, Inc. All rights reserved.\r\n * Licensed under the LGPL or a commercial license.\r\n * For LGPL see License.txt in the project root for license information.\r\n * For commercial licenses see https://www.tiny.cloud/\r\n *\r\n * Version: 5.10.7 (2022-12-06)\r\n */\n(function () {\n  'use strict';\n\n  var global = tinymce.util.Tools.resolve('tinymce.PluginManager');\n  function Plugin() {\n    global.add('colorpicker', function () {});\n  }\n  Plugin();\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJnbG9iYWwiLCJ0aW55bWNlIiwidXRpbCIsIlRvb2xzIiwicmVzb2x2ZSIsIlBsdWdpbiIsImFkZCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL2NvbG9ycGlja2VyL3BsdWdpbi5qcz8xZmY2Il0sInNvdXJjZXNDb250ZW50IjpbIi8qKlxyXG4gKiBDb3B5cmlnaHQgKGMpIFRpbnkgVGVjaG5vbG9naWVzLCBJbmMuIEFsbCByaWdodHMgcmVzZXJ2ZWQuXHJcbiAqIExpY2Vuc2VkIHVuZGVyIHRoZSBMR1BMIG9yIGEgY29tbWVyY2lhbCBsaWNlbnNlLlxyXG4gKiBGb3IgTEdQTCBzZWUgTGljZW5zZS50eHQgaW4gdGhlIHByb2plY3Qgcm9vdCBmb3IgbGljZW5zZSBpbmZvcm1hdGlvbi5cclxuICogRm9yIGNvbW1lcmNpYWwgbGljZW5zZXMgc2VlIGh0dHBzOi8vd3d3LnRpbnkuY2xvdWQvXHJcbiAqXHJcbiAqIFZlcnNpb246IDUuMTAuNyAoMjAyMi0xMi0wNilcclxuICovXHJcbihmdW5jdGlvbiAoKSB7XHJcbiAgICAndXNlIHN0cmljdCc7XHJcblxyXG4gICAgdmFyIGdsb2JhbCA9IHRpbnltY2UudXRpbC5Ub29scy5yZXNvbHZlKCd0aW55bWNlLlBsdWdpbk1hbmFnZXInKTtcclxuXHJcbiAgICBmdW5jdGlvbiBQbHVnaW4gKCkge1xyXG4gICAgICBnbG9iYWwuYWRkKCdjb2xvcnBpY2tlcicsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgUGx1Z2luKCk7XHJcblxyXG59KCkpO1xyXG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQyxhQUFZO0VBQ1QsWUFBWTs7RUFFWixJQUFJQSxNQUFNLEdBQUdDLE9BQU8sQ0FBQ0MsSUFBSSxDQUFDQyxLQUFLLENBQUNDLE9BQU8sQ0FBQyx1QkFBdUIsQ0FBQztFQUVoRSxTQUFTQyxNQUFNQSxDQUFBLEVBQUk7SUFDakJMLE1BQU0sQ0FBQ00sR0FBRyxDQUFDLGFBQWEsRUFBRSxZQUFZLENBQ3RDLENBQUMsQ0FBQztFQUNKO0VBRUFELE1BQU0sRUFBRTtBQUVaLENBQUMsR0FBRSIsImZpbGUiOiIuL3Jlc291cmNlcy9hc3NldHMvY29yZS9wbHVnaW5zL2N1c3RvbS90aW55bWNlL3BsdWdpbnMvY29sb3JwaWNrZXIvcGx1Z2luLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/colorpicker/plugin.js\n");

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
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/core/plugins/custom/tinymce/plugins/colorpicker/index.js");
/******/ 	
/******/ })()
;