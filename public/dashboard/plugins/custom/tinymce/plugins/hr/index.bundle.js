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

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/hr/index.js":
/*!**************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/hr/index.js ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("// Exports the \"hr\" plugin for usage with module loaders\n// Usage:\n//   CommonJS:\n//     require('tinymce/plugins/hr')\n//   ES2015:\n//     import 'tinymce/plugins/hr'\n__webpack_require__(/*! ./plugin.js */ \"./resources/assets/core/plugins/custom/tinymce/plugins/hr/plugin.js\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL2hyL2luZGV4LmpzLmpzIiwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBQSxtQkFBTyxDQUFDLHdGQUFhLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL2hyL2luZGV4LmpzPzYzOGQiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gRXhwb3J0cyB0aGUgXCJoclwiIHBsdWdpbiBmb3IgdXNhZ2Ugd2l0aCBtb2R1bGUgbG9hZGVyc1xyXG4vLyBVc2FnZTpcclxuLy8gICBDb21tb25KUzpcclxuLy8gICAgIHJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9ocicpXHJcbi8vICAgRVMyMDE1OlxyXG4vLyAgICAgaW1wb3J0ICd0aW55bWNlL3BsdWdpbnMvaHInXHJcbnJlcXVpcmUoJy4vcGx1Z2luLmpzJyk7Il0sIm5hbWVzIjpbInJlcXVpcmUiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/hr/index.js\n");

/***/ }),

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/hr/plugin.js":
/*!***************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/hr/plugin.js ***!
  \***************************************************************************/
/***/ (() => {

eval("/**\r\n * Copyright (c) Tiny Technologies, Inc. All rights reserved.\r\n * Licensed under the LGPL or a commercial license.\r\n * For LGPL see License.txt in the project root for license information.\r\n * For commercial licenses see https://www.tiny.cloud/\r\n *\r\n * Version: 5.10.7 (2022-12-06)\r\n */\n(function () {\n  'use strict';\n\n  var global = tinymce.util.Tools.resolve('tinymce.PluginManager');\n  var register$1 = function register$1(editor) {\n    editor.addCommand('InsertHorizontalRule', function () {\n      editor.execCommand('mceInsertContent', false, '<hr />');\n    });\n  };\n  var register = function register(editor) {\n    var onAction = function onAction() {\n      return editor.execCommand('InsertHorizontalRule');\n    };\n    editor.ui.registry.addButton('hr', {\n      icon: 'horizontal-rule',\n      tooltip: 'Horizontal line',\n      onAction: onAction\n    });\n    editor.ui.registry.addMenuItem('hr', {\n      icon: 'horizontal-rule',\n      text: 'Horizontal line',\n      onAction: onAction\n    });\n  };\n  function Plugin() {\n    global.add('hr', function (editor) {\n      register$1(editor);\n      register(editor);\n    });\n  }\n  Plugin();\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJnbG9iYWwiLCJ0aW55bWNlIiwidXRpbCIsIlRvb2xzIiwicmVzb2x2ZSIsInJlZ2lzdGVyJDEiLCJlZGl0b3IiLCJhZGRDb21tYW5kIiwiZXhlY0NvbW1hbmQiLCJyZWdpc3RlciIsIm9uQWN0aW9uIiwidWkiLCJyZWdpc3RyeSIsImFkZEJ1dHRvbiIsImljb24iLCJ0b29sdGlwIiwiYWRkTWVudUl0ZW0iLCJ0ZXh0IiwiUGx1Z2luIiwiYWRkIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9wbHVnaW5zL2N1c3RvbS90aW55bWNlL3BsdWdpbnMvaHIvcGx1Z2luLmpzP2E5ZWQiXSwic291cmNlc0NvbnRlbnQiOlsiLyoqXHJcbiAqIENvcHlyaWdodCAoYykgVGlueSBUZWNobm9sb2dpZXMsIEluYy4gQWxsIHJpZ2h0cyByZXNlcnZlZC5cclxuICogTGljZW5zZWQgdW5kZXIgdGhlIExHUEwgb3IgYSBjb21tZXJjaWFsIGxpY2Vuc2UuXHJcbiAqIEZvciBMR1BMIHNlZSBMaWNlbnNlLnR4dCBpbiB0aGUgcHJvamVjdCByb290IGZvciBsaWNlbnNlIGluZm9ybWF0aW9uLlxyXG4gKiBGb3IgY29tbWVyY2lhbCBsaWNlbnNlcyBzZWUgaHR0cHM6Ly93d3cudGlueS5jbG91ZC9cclxuICpcclxuICogVmVyc2lvbjogNS4xMC43ICgyMDIyLTEyLTA2KVxyXG4gKi9cclxuKGZ1bmN0aW9uICgpIHtcclxuICAgICd1c2Ugc3RyaWN0JztcclxuXHJcbiAgICB2YXIgZ2xvYmFsID0gdGlueW1jZS51dGlsLlRvb2xzLnJlc29sdmUoJ3RpbnltY2UuUGx1Z2luTWFuYWdlcicpO1xyXG5cclxuICAgIHZhciByZWdpc3RlciQxID0gZnVuY3Rpb24gKGVkaXRvcikge1xyXG4gICAgICBlZGl0b3IuYWRkQ29tbWFuZCgnSW5zZXJ0SG9yaXpvbnRhbFJ1bGUnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgZWRpdG9yLmV4ZWNDb21tYW5kKCdtY2VJbnNlcnRDb250ZW50JywgZmFsc2UsICc8aHIgLz4nKTtcclxuICAgICAgfSk7XHJcbiAgICB9O1xyXG5cclxuICAgIHZhciByZWdpc3RlciA9IGZ1bmN0aW9uIChlZGl0b3IpIHtcclxuICAgICAgdmFyIG9uQWN0aW9uID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIHJldHVybiBlZGl0b3IuZXhlY0NvbW1hbmQoJ0luc2VydEhvcml6b250YWxSdWxlJyk7XHJcbiAgICAgIH07XHJcbiAgICAgIGVkaXRvci51aS5yZWdpc3RyeS5hZGRCdXR0b24oJ2hyJywge1xyXG4gICAgICAgIGljb246ICdob3Jpem9udGFsLXJ1bGUnLFxyXG4gICAgICAgIHRvb2x0aXA6ICdIb3Jpem9udGFsIGxpbmUnLFxyXG4gICAgICAgIG9uQWN0aW9uOiBvbkFjdGlvblxyXG4gICAgICB9KTtcclxuICAgICAgZWRpdG9yLnVpLnJlZ2lzdHJ5LmFkZE1lbnVJdGVtKCdocicsIHtcclxuICAgICAgICBpY29uOiAnaG9yaXpvbnRhbC1ydWxlJyxcclxuICAgICAgICB0ZXh0OiAnSG9yaXpvbnRhbCBsaW5lJyxcclxuICAgICAgICBvbkFjdGlvbjogb25BY3Rpb25cclxuICAgICAgfSk7XHJcbiAgICB9O1xyXG5cclxuICAgIGZ1bmN0aW9uIFBsdWdpbiAoKSB7XHJcbiAgICAgIGdsb2JhbC5hZGQoJ2hyJywgZnVuY3Rpb24gKGVkaXRvcikge1xyXG4gICAgICAgIHJlZ2lzdGVyJDEoZWRpdG9yKTtcclxuICAgICAgICByZWdpc3RlcihlZGl0b3IpO1xyXG4gICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICBQbHVnaW4oKTtcclxuXHJcbn0oKSk7XHJcbiJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNDLGFBQVk7RUFDVCxZQUFZOztFQUVaLElBQUlBLE1BQU0sR0FBR0MsT0FBTyxDQUFDQyxJQUFJLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxDQUFDLHVCQUF1QixDQUFDO0VBRWhFLElBQUlDLFVBQVUsR0FBRyxTQUFiQSxVQUFVQSxDQUFhQyxNQUFNLEVBQUU7SUFDakNBLE1BQU0sQ0FBQ0MsVUFBVSxDQUFDLHNCQUFzQixFQUFFLFlBQVk7TUFDcERELE1BQU0sQ0FBQ0UsV0FBVyxDQUFDLGtCQUFrQixFQUFFLEtBQUssRUFBRSxRQUFRLENBQUM7SUFDekQsQ0FBQyxDQUFDO0VBQ0osQ0FBQztFQUVELElBQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFRQSxDQUFhSCxNQUFNLEVBQUU7SUFDL0IsSUFBSUksUUFBUSxHQUFHLFNBQVhBLFFBQVFBLENBQUEsRUFBZTtNQUN6QixPQUFPSixNQUFNLENBQUNFLFdBQVcsQ0FBQyxzQkFBc0IsQ0FBQztJQUNuRCxDQUFDO0lBQ0RGLE1BQU0sQ0FBQ0ssRUFBRSxDQUFDQyxRQUFRLENBQUNDLFNBQVMsQ0FBQyxJQUFJLEVBQUU7TUFDakNDLElBQUksRUFBRSxpQkFBaUI7TUFDdkJDLE9BQU8sRUFBRSxpQkFBaUI7TUFDMUJMLFFBQVEsRUFBRUE7SUFDWixDQUFDLENBQUM7SUFDRkosTUFBTSxDQUFDSyxFQUFFLENBQUNDLFFBQVEsQ0FBQ0ksV0FBVyxDQUFDLElBQUksRUFBRTtNQUNuQ0YsSUFBSSxFQUFFLGlCQUFpQjtNQUN2QkcsSUFBSSxFQUFFLGlCQUFpQjtNQUN2QlAsUUFBUSxFQUFFQTtJQUNaLENBQUMsQ0FBQztFQUNKLENBQUM7RUFFRCxTQUFTUSxNQUFNQSxDQUFBLEVBQUk7SUFDakJsQixNQUFNLENBQUNtQixHQUFHLENBQUMsSUFBSSxFQUFFLFVBQVViLE1BQU0sRUFBRTtNQUNqQ0QsVUFBVSxDQUFDQyxNQUFNLENBQUM7TUFDbEJHLFFBQVEsQ0FBQ0gsTUFBTSxDQUFDO0lBQ2xCLENBQUMsQ0FBQztFQUNKO0VBRUFZLE1BQU0sRUFBRTtBQUVaLENBQUMsR0FBRSIsImZpbGUiOiIuL3Jlc291cmNlcy9hc3NldHMvY29yZS9wbHVnaW5zL2N1c3RvbS90aW55bWNlL3BsdWdpbnMvaHIvcGx1Z2luLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/hr/plugin.js\n");

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
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/core/plugins/custom/tinymce/plugins/hr/index.js");
/******/ 	
/******/ })()
;