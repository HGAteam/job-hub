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

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/print/index.js":
/*!*****************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/print/index.js ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("// Exports the \"print\" plugin for usage with module loaders\n// Usage:\n//   CommonJS:\n//     require('tinymce/plugins/print')\n//   ES2015:\n//     import 'tinymce/plugins/print'\n__webpack_require__(/*! ./plugin.js */ \"./resources/assets/core/plugins/custom/tinymce/plugins/print/plugin.js\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL3ByaW50L2luZGV4LmpzLmpzIiwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBQSxtQkFBTyxDQUFDLDJGQUFhLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL3ByaW50L2luZGV4LmpzPzM0YWYiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gRXhwb3J0cyB0aGUgXCJwcmludFwiIHBsdWdpbiBmb3IgdXNhZ2Ugd2l0aCBtb2R1bGUgbG9hZGVyc1xyXG4vLyBVc2FnZTpcclxuLy8gICBDb21tb25KUzpcclxuLy8gICAgIHJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9wcmludCcpXHJcbi8vICAgRVMyMDE1OlxyXG4vLyAgICAgaW1wb3J0ICd0aW55bWNlL3BsdWdpbnMvcHJpbnQnXHJcbnJlcXVpcmUoJy4vcGx1Z2luLmpzJyk7Il0sIm5hbWVzIjpbInJlcXVpcmUiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/print/index.js\n");

/***/ }),

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/print/plugin.js":
/*!******************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/print/plugin.js ***!
  \******************************************************************************/
/***/ (() => {

eval("/**\r\n * Copyright (c) Tiny Technologies, Inc. All rights reserved.\r\n * Licensed under the LGPL or a commercial license.\r\n * For LGPL see License.txt in the project root for license information.\r\n * For commercial licenses see https://www.tiny.cloud/\r\n *\r\n * Version: 5.10.7 (2022-12-06)\r\n */\n(function () {\n  'use strict';\n\n  var global$1 = tinymce.util.Tools.resolve('tinymce.PluginManager');\n  var global = tinymce.util.Tools.resolve('tinymce.Env');\n  var register$1 = function register$1(editor) {\n    editor.addCommand('mcePrint', function () {\n      if (global.browser.isIE()) {\n        editor.getDoc().execCommand('print', false, null);\n      } else {\n        editor.getWin().print();\n      }\n    });\n  };\n  var register = function register(editor) {\n    var onAction = function onAction() {\n      return editor.execCommand('mcePrint');\n    };\n    editor.ui.registry.addButton('print', {\n      icon: 'print',\n      tooltip: 'Print',\n      onAction: onAction\n    });\n    editor.ui.registry.addMenuItem('print', {\n      text: 'Print...',\n      icon: 'print',\n      onAction: onAction\n    });\n  };\n  function Plugin() {\n    global$1.add('print', function (editor) {\n      register$1(editor);\n      register(editor);\n      editor.addShortcut('Meta+P', '', 'mcePrint');\n    });\n  }\n  Plugin();\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJnbG9iYWwkMSIsInRpbnltY2UiLCJ1dGlsIiwiVG9vbHMiLCJyZXNvbHZlIiwiZ2xvYmFsIiwicmVnaXN0ZXIkMSIsImVkaXRvciIsImFkZENvbW1hbmQiLCJicm93c2VyIiwiaXNJRSIsImdldERvYyIsImV4ZWNDb21tYW5kIiwiZ2V0V2luIiwicHJpbnQiLCJyZWdpc3RlciIsIm9uQWN0aW9uIiwidWkiLCJyZWdpc3RyeSIsImFkZEJ1dHRvbiIsImljb24iLCJ0b29sdGlwIiwiYWRkTWVudUl0ZW0iLCJ0ZXh0IiwiUGx1Z2luIiwiYWRkIiwiYWRkU2hvcnRjdXQiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL3BsdWdpbnMvY3VzdG9tL3RpbnltY2UvcGx1Z2lucy9wcmludC9wbHVnaW4uanM/MzQ5MCJdLCJzb3VyY2VzQ29udGVudCI6WyIvKipcclxuICogQ29weXJpZ2h0IChjKSBUaW55IFRlY2hub2xvZ2llcywgSW5jLiBBbGwgcmlnaHRzIHJlc2VydmVkLlxyXG4gKiBMaWNlbnNlZCB1bmRlciB0aGUgTEdQTCBvciBhIGNvbW1lcmNpYWwgbGljZW5zZS5cclxuICogRm9yIExHUEwgc2VlIExpY2Vuc2UudHh0IGluIHRoZSBwcm9qZWN0IHJvb3QgZm9yIGxpY2Vuc2UgaW5mb3JtYXRpb24uXHJcbiAqIEZvciBjb21tZXJjaWFsIGxpY2Vuc2VzIHNlZSBodHRwczovL3d3dy50aW55LmNsb3VkL1xyXG4gKlxyXG4gKiBWZXJzaW9uOiA1LjEwLjcgKDIwMjItMTItMDYpXHJcbiAqL1xyXG4oZnVuY3Rpb24gKCkge1xyXG4gICAgJ3VzZSBzdHJpY3QnO1xyXG5cclxuICAgIHZhciBnbG9iYWwkMSA9IHRpbnltY2UudXRpbC5Ub29scy5yZXNvbHZlKCd0aW55bWNlLlBsdWdpbk1hbmFnZXInKTtcclxuXHJcbiAgICB2YXIgZ2xvYmFsID0gdGlueW1jZS51dGlsLlRvb2xzLnJlc29sdmUoJ3RpbnltY2UuRW52Jyk7XHJcblxyXG4gICAgdmFyIHJlZ2lzdGVyJDEgPSBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgIGVkaXRvci5hZGRDb21tYW5kKCdtY2VQcmludCcsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBpZiAoZ2xvYmFsLmJyb3dzZXIuaXNJRSgpKSB7XHJcbiAgICAgICAgICBlZGl0b3IuZ2V0RG9jKCkuZXhlY0NvbW1hbmQoJ3ByaW50JywgZmFsc2UsIG51bGwpO1xyXG4gICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICBlZGl0b3IuZ2V0V2luKCkucHJpbnQoKTtcclxuICAgICAgICB9XHJcbiAgICAgIH0pO1xyXG4gICAgfTtcclxuXHJcbiAgICB2YXIgcmVnaXN0ZXIgPSBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgIHZhciBvbkFjdGlvbiA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICByZXR1cm4gZWRpdG9yLmV4ZWNDb21tYW5kKCdtY2VQcmludCcpO1xyXG4gICAgICB9O1xyXG4gICAgICBlZGl0b3IudWkucmVnaXN0cnkuYWRkQnV0dG9uKCdwcmludCcsIHtcclxuICAgICAgICBpY29uOiAncHJpbnQnLFxyXG4gICAgICAgIHRvb2x0aXA6ICdQcmludCcsXHJcbiAgICAgICAgb25BY3Rpb246IG9uQWN0aW9uXHJcbiAgICAgIH0pO1xyXG4gICAgICBlZGl0b3IudWkucmVnaXN0cnkuYWRkTWVudUl0ZW0oJ3ByaW50Jywge1xyXG4gICAgICAgIHRleHQ6ICdQcmludC4uLicsXHJcbiAgICAgICAgaWNvbjogJ3ByaW50JyxcclxuICAgICAgICBvbkFjdGlvbjogb25BY3Rpb25cclxuICAgICAgfSk7XHJcbiAgICB9O1xyXG5cclxuICAgIGZ1bmN0aW9uIFBsdWdpbiAoKSB7XHJcbiAgICAgIGdsb2JhbCQxLmFkZCgncHJpbnQnLCBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgICAgcmVnaXN0ZXIkMShlZGl0b3IpO1xyXG4gICAgICAgIHJlZ2lzdGVyKGVkaXRvcik7XHJcbiAgICAgICAgZWRpdG9yLmFkZFNob3J0Y3V0KCdNZXRhK1AnLCAnJywgJ21jZVByaW50Jyk7XHJcbiAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIFBsdWdpbigpO1xyXG5cclxufSgpKTtcclxuIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0MsYUFBWTtFQUNULFlBQVk7O0VBRVosSUFBSUEsUUFBUSxHQUFHQyxPQUFPLENBQUNDLElBQUksQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLENBQUMsdUJBQXVCLENBQUM7RUFFbEUsSUFBSUMsTUFBTSxHQUFHSixPQUFPLENBQUNDLElBQUksQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLENBQUMsYUFBYSxDQUFDO0VBRXRELElBQUlFLFVBQVUsR0FBRyxTQUFiQSxVQUFVQSxDQUFhQyxNQUFNLEVBQUU7SUFDakNBLE1BQU0sQ0FBQ0MsVUFBVSxDQUFDLFVBQVUsRUFBRSxZQUFZO01BQ3hDLElBQUlILE1BQU0sQ0FBQ0ksT0FBTyxDQUFDQyxJQUFJLEVBQUUsRUFBRTtRQUN6QkgsTUFBTSxDQUFDSSxNQUFNLEVBQUUsQ0FBQ0MsV0FBVyxDQUFDLE9BQU8sRUFBRSxLQUFLLEVBQUUsSUFBSSxDQUFDO01BQ25ELENBQUMsTUFBTTtRQUNMTCxNQUFNLENBQUNNLE1BQU0sRUFBRSxDQUFDQyxLQUFLLEVBQUU7TUFDekI7SUFDRixDQUFDLENBQUM7RUFDSixDQUFDO0VBRUQsSUFBSUMsUUFBUSxHQUFHLFNBQVhBLFFBQVFBLENBQWFSLE1BQU0sRUFBRTtJQUMvQixJQUFJUyxRQUFRLEdBQUcsU0FBWEEsUUFBUUEsQ0FBQSxFQUFlO01BQ3pCLE9BQU9ULE1BQU0sQ0FBQ0ssV0FBVyxDQUFDLFVBQVUsQ0FBQztJQUN2QyxDQUFDO0lBQ0RMLE1BQU0sQ0FBQ1UsRUFBRSxDQUFDQyxRQUFRLENBQUNDLFNBQVMsQ0FBQyxPQUFPLEVBQUU7TUFDcENDLElBQUksRUFBRSxPQUFPO01BQ2JDLE9BQU8sRUFBRSxPQUFPO01BQ2hCTCxRQUFRLEVBQUVBO0lBQ1osQ0FBQyxDQUFDO0lBQ0ZULE1BQU0sQ0FBQ1UsRUFBRSxDQUFDQyxRQUFRLENBQUNJLFdBQVcsQ0FBQyxPQUFPLEVBQUU7TUFDdENDLElBQUksRUFBRSxVQUFVO01BQ2hCSCxJQUFJLEVBQUUsT0FBTztNQUNiSixRQUFRLEVBQUVBO0lBQ1osQ0FBQyxDQUFDO0VBQ0osQ0FBQztFQUVELFNBQVNRLE1BQU1BLENBQUEsRUFBSTtJQUNqQnhCLFFBQVEsQ0FBQ3lCLEdBQUcsQ0FBQyxPQUFPLEVBQUUsVUFBVWxCLE1BQU0sRUFBRTtNQUN0Q0QsVUFBVSxDQUFDQyxNQUFNLENBQUM7TUFDbEJRLFFBQVEsQ0FBQ1IsTUFBTSxDQUFDO01BQ2hCQSxNQUFNLENBQUNtQixXQUFXLENBQUMsUUFBUSxFQUFFLEVBQUUsRUFBRSxVQUFVLENBQUM7SUFDOUMsQ0FBQyxDQUFDO0VBQ0o7RUFFQUYsTUFBTSxFQUFFO0FBRVosQ0FBQyxHQUFFIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL3BsdWdpbnMvY3VzdG9tL3RpbnltY2UvcGx1Z2lucy9wcmludC9wbHVnaW4uanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/print/plugin.js\n");

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
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/core/plugins/custom/tinymce/plugins/print/index.js");
/******/ 	
/******/ })()
;