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

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/hr/plugin.min.js":
/*!*******************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/hr/plugin.min.js ***!
  \*******************************************************************************/
/***/ (() => {

eval("/**\r\n * Copyright (c) Tiny Technologies, Inc. All rights reserved.\r\n * Licensed under the LGPL or a commercial license.\r\n * For LGPL see License.txt in the project root for license information.\r\n * For commercial licenses see https://www.tiny.cloud/\r\n *\r\n * Version: 5.10.7 (2022-12-06)\r\n */\n!function () {\n  \"use strict\";\n\n  tinymce.util.Tools.resolve(\"tinymce.PluginManager\").add(\"hr\", function (n) {\n    var o, t;\n    function e() {\n      return t.execCommand(\"InsertHorizontalRule\");\n    }\n    (o = n).addCommand(\"InsertHorizontalRule\", function () {\n      o.execCommand(\"mceInsertContent\", !1, \"<hr />\");\n    }), (t = n).ui.registry.addButton(\"hr\", {\n      icon: \"horizontal-rule\",\n      tooltip: \"Horizontal line\",\n      onAction: e\n    }), t.ui.registry.addMenuItem(\"hr\", {\n      icon: \"horizontal-rule\",\n      text: \"Horizontal line\",\n      onAction: e\n    });\n  });\n}();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJ0aW55bWNlIiwidXRpbCIsIlRvb2xzIiwicmVzb2x2ZSIsImFkZCIsIm4iLCJvIiwidCIsImUiLCJleGVjQ29tbWFuZCIsImFkZENvbW1hbmQiLCJ1aSIsInJlZ2lzdHJ5IiwiYWRkQnV0dG9uIiwiaWNvbiIsInRvb2x0aXAiLCJvbkFjdGlvbiIsImFkZE1lbnVJdGVtIiwidGV4dCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL2hyL3BsdWdpbi5taW4uanM/ODU5MCJdLCJzb3VyY2VzQ29udGVudCI6WyIvKipcclxuICogQ29weXJpZ2h0IChjKSBUaW55IFRlY2hub2xvZ2llcywgSW5jLiBBbGwgcmlnaHRzIHJlc2VydmVkLlxyXG4gKiBMaWNlbnNlZCB1bmRlciB0aGUgTEdQTCBvciBhIGNvbW1lcmNpYWwgbGljZW5zZS5cclxuICogRm9yIExHUEwgc2VlIExpY2Vuc2UudHh0IGluIHRoZSBwcm9qZWN0IHJvb3QgZm9yIGxpY2Vuc2UgaW5mb3JtYXRpb24uXHJcbiAqIEZvciBjb21tZXJjaWFsIGxpY2Vuc2VzIHNlZSBodHRwczovL3d3dy50aW55LmNsb3VkL1xyXG4gKlxyXG4gKiBWZXJzaW9uOiA1LjEwLjcgKDIwMjItMTItMDYpXHJcbiAqL1xyXG4hZnVuY3Rpb24oKXtcInVzZSBzdHJpY3RcIjt0aW55bWNlLnV0aWwuVG9vbHMucmVzb2x2ZShcInRpbnltY2UuUGx1Z2luTWFuYWdlclwiKS5hZGQoXCJoclwiLGZ1bmN0aW9uKG4pe3ZhciBvLHQ7ZnVuY3Rpb24gZSgpe3JldHVybiB0LmV4ZWNDb21tYW5kKFwiSW5zZXJ0SG9yaXpvbnRhbFJ1bGVcIil9KG89bikuYWRkQ29tbWFuZChcIkluc2VydEhvcml6b250YWxSdWxlXCIsZnVuY3Rpb24oKXtvLmV4ZWNDb21tYW5kKFwibWNlSW5zZXJ0Q29udGVudFwiLCExLFwiPGhyIC8+XCIpfSksKHQ9bikudWkucmVnaXN0cnkuYWRkQnV0dG9uKFwiaHJcIix7aWNvbjpcImhvcml6b250YWwtcnVsZVwiLHRvb2x0aXA6XCJIb3Jpem9udGFsIGxpbmVcIixvbkFjdGlvbjplfSksdC51aS5yZWdpc3RyeS5hZGRNZW51SXRlbShcImhyXCIse2ljb246XCJob3Jpem9udGFsLXJ1bGVcIix0ZXh0OlwiSG9yaXpvbnRhbCBsaW5lXCIsb25BY3Rpb246ZX0pfSl9KCk7Il0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsQ0FBQyxZQUFVO0VBQUMsWUFBWTs7RUFBQ0EsT0FBTyxDQUFDQyxJQUFJLENBQUNDLEtBQUssQ0FBQ0MsT0FBTyxDQUFDLHVCQUF1QixDQUFDLENBQUNDLEdBQUcsQ0FBQyxJQUFJLEVBQUMsVUFBU0MsQ0FBQyxFQUFDO0lBQUMsSUFBSUMsQ0FBQyxFQUFDQyxDQUFDO0lBQUMsU0FBU0MsQ0FBQ0EsQ0FBQSxFQUFFO01BQUMsT0FBT0QsQ0FBQyxDQUFDRSxXQUFXLENBQUMsc0JBQXNCLENBQUM7SUFBQTtJQUFDLENBQUNILENBQUMsR0FBQ0QsQ0FBQyxFQUFFSyxVQUFVLENBQUMsc0JBQXNCLEVBQUMsWUFBVTtNQUFDSixDQUFDLENBQUNHLFdBQVcsQ0FBQyxrQkFBa0IsRUFBQyxDQUFDLENBQUMsRUFBQyxRQUFRLENBQUM7SUFBQSxDQUFDLENBQUMsRUFBQyxDQUFDRixDQUFDLEdBQUNGLENBQUMsRUFBRU0sRUFBRSxDQUFDQyxRQUFRLENBQUNDLFNBQVMsQ0FBQyxJQUFJLEVBQUM7TUFBQ0MsSUFBSSxFQUFDLGlCQUFpQjtNQUFDQyxPQUFPLEVBQUMsaUJBQWlCO01BQUNDLFFBQVEsRUFBQ1I7SUFBQyxDQUFDLENBQUMsRUFBQ0QsQ0FBQyxDQUFDSSxFQUFFLENBQUNDLFFBQVEsQ0FBQ0ssV0FBVyxDQUFDLElBQUksRUFBQztNQUFDSCxJQUFJLEVBQUMsaUJBQWlCO01BQUNJLElBQUksRUFBQyxpQkFBaUI7TUFBQ0YsUUFBUSxFQUFDUjtJQUFDLENBQUMsQ0FBQztFQUFBLENBQUMsQ0FBQztBQUFBLENBQUMsRUFBRSIsImZpbGUiOiIuL3Jlc291cmNlcy9hc3NldHMvY29yZS9wbHVnaW5zL2N1c3RvbS90aW55bWNlL3BsdWdpbnMvaHIvcGx1Z2luLm1pbi5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/hr/plugin.min.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/plugins/custom/tinymce/plugins/hr/plugin.min.js"]();
/******/ 	
/******/ })()
;