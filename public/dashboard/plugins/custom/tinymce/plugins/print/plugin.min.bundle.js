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

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/print/plugin.min.js":
/*!**********************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/print/plugin.min.js ***!
  \**********************************************************************************/
/***/ (() => {

eval("/**\r\n * Copyright (c) Tiny Technologies, Inc. All rights reserved.\r\n * Licensed under the LGPL or a commercial license.\r\n * For LGPL see License.txt in the project root for license information.\r\n * For commercial licenses see https://www.tiny.cloud/\r\n *\r\n * Version: 5.10.7 (2022-12-06)\r\n */\n!function () {\n  \"use strict\";\n\n  var n = tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),\n    r = tinymce.util.Tools.resolve(\"tinymce.Env\");\n  n.add(\"print\", function (n) {\n    var t, i;\n    function e() {\n      return i.execCommand(\"mcePrint\");\n    }\n    (t = n).addCommand(\"mcePrint\", function () {\n      r.browser.isIE() ? t.getDoc().execCommand(\"print\", !1, null) : t.getWin().print();\n    }), (i = n).ui.registry.addButton(\"print\", {\n      icon: \"print\",\n      tooltip: \"Print\",\n      onAction: e\n    }), i.ui.registry.addMenuItem(\"print\", {\n      text: \"Print...\",\n      icon: \"print\",\n      onAction: e\n    }), n.addShortcut(\"Meta+P\", \"\", \"mcePrint\");\n  });\n}();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJuIiwidGlueW1jZSIsInV0aWwiLCJUb29scyIsInJlc29sdmUiLCJyIiwiYWRkIiwidCIsImkiLCJlIiwiZXhlY0NvbW1hbmQiLCJhZGRDb21tYW5kIiwiYnJvd3NlciIsImlzSUUiLCJnZXREb2MiLCJnZXRXaW4iLCJwcmludCIsInVpIiwicmVnaXN0cnkiLCJhZGRCdXR0b24iLCJpY29uIiwidG9vbHRpcCIsIm9uQWN0aW9uIiwiYWRkTWVudUl0ZW0iLCJ0ZXh0IiwiYWRkU2hvcnRjdXQiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL3BsdWdpbnMvY3VzdG9tL3RpbnltY2UvcGx1Z2lucy9wcmludC9wbHVnaW4ubWluLmpzP2YwOGUiXSwic291cmNlc0NvbnRlbnQiOlsiLyoqXHJcbiAqIENvcHlyaWdodCAoYykgVGlueSBUZWNobm9sb2dpZXMsIEluYy4gQWxsIHJpZ2h0cyByZXNlcnZlZC5cclxuICogTGljZW5zZWQgdW5kZXIgdGhlIExHUEwgb3IgYSBjb21tZXJjaWFsIGxpY2Vuc2UuXHJcbiAqIEZvciBMR1BMIHNlZSBMaWNlbnNlLnR4dCBpbiB0aGUgcHJvamVjdCByb290IGZvciBsaWNlbnNlIGluZm9ybWF0aW9uLlxyXG4gKiBGb3IgY29tbWVyY2lhbCBsaWNlbnNlcyBzZWUgaHR0cHM6Ly93d3cudGlueS5jbG91ZC9cclxuICpcclxuICogVmVyc2lvbjogNS4xMC43ICgyMDIyLTEyLTA2KVxyXG4gKi9cclxuIWZ1bmN0aW9uKCl7XCJ1c2Ugc3RyaWN0XCI7dmFyIG49dGlueW1jZS51dGlsLlRvb2xzLnJlc29sdmUoXCJ0aW55bWNlLlBsdWdpbk1hbmFnZXJcIikscj10aW55bWNlLnV0aWwuVG9vbHMucmVzb2x2ZShcInRpbnltY2UuRW52XCIpO24uYWRkKFwicHJpbnRcIixmdW5jdGlvbihuKXt2YXIgdCxpO2Z1bmN0aW9uIGUoKXtyZXR1cm4gaS5leGVjQ29tbWFuZChcIm1jZVByaW50XCIpfSh0PW4pLmFkZENvbW1hbmQoXCJtY2VQcmludFwiLGZ1bmN0aW9uKCl7ci5icm93c2VyLmlzSUUoKT90LmdldERvYygpLmV4ZWNDb21tYW5kKFwicHJpbnRcIiwhMSxudWxsKTp0LmdldFdpbigpLnByaW50KCl9KSwoaT1uKS51aS5yZWdpc3RyeS5hZGRCdXR0b24oXCJwcmludFwiLHtpY29uOlwicHJpbnRcIix0b29sdGlwOlwiUHJpbnRcIixvbkFjdGlvbjplfSksaS51aS5yZWdpc3RyeS5hZGRNZW51SXRlbShcInByaW50XCIse3RleHQ6XCJQcmludC4uLlwiLGljb246XCJwcmludFwiLG9uQWN0aW9uOmV9KSxuLmFkZFNob3J0Y3V0KFwiTWV0YStQXCIsXCJcIixcIm1jZVByaW50XCIpfSl9KCk7Il0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsQ0FBQyxZQUFVO0VBQUMsWUFBWTs7RUFBQyxJQUFJQSxDQUFDLEdBQUNDLE9BQU8sQ0FBQ0MsSUFBSSxDQUFDQyxLQUFLLENBQUNDLE9BQU8sQ0FBQyx1QkFBdUIsQ0FBQztJQUFDQyxDQUFDLEdBQUNKLE9BQU8sQ0FBQ0MsSUFBSSxDQUFDQyxLQUFLLENBQUNDLE9BQU8sQ0FBQyxhQUFhLENBQUM7RUFBQ0osQ0FBQyxDQUFDTSxHQUFHLENBQUMsT0FBTyxFQUFDLFVBQVNOLENBQUMsRUFBQztJQUFDLElBQUlPLENBQUMsRUFBQ0MsQ0FBQztJQUFDLFNBQVNDLENBQUNBLENBQUEsRUFBRTtNQUFDLE9BQU9ELENBQUMsQ0FBQ0UsV0FBVyxDQUFDLFVBQVUsQ0FBQztJQUFBO0lBQUMsQ0FBQ0gsQ0FBQyxHQUFDUCxDQUFDLEVBQUVXLFVBQVUsQ0FBQyxVQUFVLEVBQUMsWUFBVTtNQUFDTixDQUFDLENBQUNPLE9BQU8sQ0FBQ0MsSUFBSSxFQUFFLEdBQUNOLENBQUMsQ0FBQ08sTUFBTSxFQUFFLENBQUNKLFdBQVcsQ0FBQyxPQUFPLEVBQUMsQ0FBQyxDQUFDLEVBQUMsSUFBSSxDQUFDLEdBQUNILENBQUMsQ0FBQ1EsTUFBTSxFQUFFLENBQUNDLEtBQUssRUFBRTtJQUFBLENBQUMsQ0FBQyxFQUFDLENBQUNSLENBQUMsR0FBQ1IsQ0FBQyxFQUFFaUIsRUFBRSxDQUFDQyxRQUFRLENBQUNDLFNBQVMsQ0FBQyxPQUFPLEVBQUM7TUFBQ0MsSUFBSSxFQUFDLE9BQU87TUFBQ0MsT0FBTyxFQUFDLE9BQU87TUFBQ0MsUUFBUSxFQUFDYjtJQUFDLENBQUMsQ0FBQyxFQUFDRCxDQUFDLENBQUNTLEVBQUUsQ0FBQ0MsUUFBUSxDQUFDSyxXQUFXLENBQUMsT0FBTyxFQUFDO01BQUNDLElBQUksRUFBQyxVQUFVO01BQUNKLElBQUksRUFBQyxPQUFPO01BQUNFLFFBQVEsRUFBQ2I7SUFBQyxDQUFDLENBQUMsRUFBQ1QsQ0FBQyxDQUFDeUIsV0FBVyxDQUFDLFFBQVEsRUFBQyxFQUFFLEVBQUMsVUFBVSxDQUFDO0VBQUEsQ0FBQyxDQUFDO0FBQUEsQ0FBQyxFQUFFIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL3BsdWdpbnMvY3VzdG9tL3RpbnltY2UvcGx1Z2lucy9wcmludC9wbHVnaW4ubWluLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/print/plugin.min.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/plugins/custom/tinymce/plugins/print/plugin.min.js"]();
/******/ 	
/******/ })()
;