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

/***/ "./resources/assets/core/js/custom/documentation/charts/flotcharts/stack.js":
/*!**********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/charts/flotcharts/stack.js ***!
  \**********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFlotDemoStack = function () {\n  // Private functions\n  var exampleStack = function exampleStack() {\n    var d1 = [];\n    for (var i = 0; i <= 10; i += 1) d1.push([i, parseInt(Math.random() * 30)]);\n    var d2 = [];\n    for (var i = 0; i <= 10; i += 1) d2.push([i, parseInt(Math.random() * 30)]);\n    var d3 = [];\n    for (var i = 0; i <= 10; i += 1) d3.push([i, parseInt(Math.random() * 30)]);\n    var stack = 0,\n      bars = true,\n      lines = false,\n      steps = false;\n    function plotWithOptions() {\n      $.plot($(\"#kt_docs_flot_stack\"), [{\n        label: \"sales\",\n        data: d1,\n        lines: {\n          lineWidth: 1\n        },\n        shadowSize: 0\n      }, {\n        label: \"tax\",\n        data: d2,\n        lines: {\n          lineWidth: 1\n        },\n        shadowSize: 0\n      }, {\n        label: \"profit\",\n        data: d3,\n        lines: {\n          lineWidth: 1\n        },\n        shadowSize: 0\n      }], {\n        colors: [KTUtil.getCssVariableValue('--bs-active-danger'), KTUtil.getCssVariableValue('--bs-active-primary')],\n        series: {\n          stack: stack,\n          lines: {\n            show: lines,\n            fill: true,\n            steps: steps,\n            lineWidth: 0 // in pixels\n          },\n\n          bars: {\n            show: bars,\n            barWidth: 0.5,\n            lineWidth: 0,\n            // in pixels\n            shadowSize: 0,\n            align: 'center'\n          }\n        },\n        grid: {\n          tickColor: KTUtil.getCssVariableValue('--bs-light-dark'),\n          borderColor: KTUtil.getCssVariableValue('--bs-light-dark'),\n          borderWidth: 1\n        }\n      });\n    }\n    $(\".stackControls input\").click(function (e) {\n      e.preventDefault();\n      stack = $(this).val() == \"With stacking\" ? true : null;\n      plotWithOptions();\n    });\n    $(\".graphControls input\").click(function (e) {\n      e.preventDefault();\n      bars = $(this).val().indexOf(\"Bars\") != -1;\n      lines = $(this).val().indexOf(\"Lines\") != -1;\n      steps = $(this).val().indexOf(\"steps\") != -1;\n      plotWithOptions();\n    });\n    plotWithOptions();\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleStack();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFlotDemoStack.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vY2hhcnRzL2Zsb3RjaGFydHMvc3RhY2suanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxlQUFlLEdBQUcsWUFBWTtFQUM5QjtFQUNBLElBQUlDLFlBQVksR0FBRyxTQUFmQSxZQUFZQSxDQUFBLEVBQWU7SUFDM0IsSUFBSUMsRUFBRSxHQUFHLEVBQUU7SUFDakIsS0FBSyxJQUFJQyxDQUFDLEdBQUcsQ0FBQyxFQUFFQSxDQUFDLElBQUksRUFBRSxFQUFFQSxDQUFDLElBQUksQ0FBQyxFQUM5QkQsRUFBRSxDQUFDRSxJQUFJLENBQUMsQ0FBQ0QsQ0FBQyxFQUFFRSxRQUFRLENBQUNDLElBQUksQ0FBQ0MsTUFBTSxFQUFFLEdBQUcsRUFBRSxDQUFDLENBQUMsQ0FBQztJQUUzQyxJQUFJQyxFQUFFLEdBQUcsRUFBRTtJQUNYLEtBQUssSUFBSUwsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxJQUFJLEVBQUUsRUFBRUEsQ0FBQyxJQUFJLENBQUMsRUFDOUJLLEVBQUUsQ0FBQ0osSUFBSSxDQUFDLENBQUNELENBQUMsRUFBRUUsUUFBUSxDQUFDQyxJQUFJLENBQUNDLE1BQU0sRUFBRSxHQUFHLEVBQUUsQ0FBQyxDQUFDLENBQUM7SUFFM0MsSUFBSUUsRUFBRSxHQUFHLEVBQUU7SUFDWCxLQUFLLElBQUlOLENBQUMsR0FBRyxDQUFDLEVBQUVBLENBQUMsSUFBSSxFQUFFLEVBQUVBLENBQUMsSUFBSSxDQUFDLEVBQzlCTSxFQUFFLENBQUNMLElBQUksQ0FBQyxDQUFDRCxDQUFDLEVBQUVFLFFBQVEsQ0FBQ0MsSUFBSSxDQUFDQyxNQUFNLEVBQUUsR0FBRyxFQUFFLENBQUMsQ0FBQyxDQUFDO0lBRTNDLElBQUlHLEtBQUssR0FBRyxDQUFDO01BQ1pDLElBQUksR0FBRyxJQUFJO01BQ1hDLEtBQUssR0FBRyxLQUFLO01BQ2JDLEtBQUssR0FBRyxLQUFLO0lBRWQs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Q0FBQ3NDLElBQUksRUFBRTtBQUMxQixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vY2hhcnRzL2Zsb3RjaGFydHMvc3RhY2suanM/MDg1MCJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtURmxvdERlbW9TdGFjayA9IGZ1bmN0aW9uICgpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcbiAgICB2YXIgZXhhbXBsZVN0YWNrID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIHZhciBkMSA9IFtdO1xyXG5cdFx0Zm9yICh2YXIgaSA9IDA7IGkgPD0gMTA7IGkgKz0gMSlcclxuXHRcdFx0ZDEucHVzaChbaSwgcGFyc2VJbnQoTWF0aC5yYW5kb20oKSAqIDMwKV0pO1xyXG5cclxuXHRcdHZhciBkMiA9IFtdO1xyXG5cdFx0Zm9yICh2YXIgaSA9IDA7IGkgPD0gMTA7IGkgKz0gMSlcclxuXHRcdFx0ZDIucHVzaChbaSwgcGFyc2VJbnQoTWF0aC5yYW5kb20oKSAqIDMwKV0pO1xyXG5cclxuXHRcdHZhciBkMyA9IFtdO1xyXG5cdFx0Zm9yICh2YXIgaSA9IDA7IGkgPD0gMTA7IGkgKz0gMSlcclxuXHRcdFx0ZDMucHVzaChbaSwgcGFyc2VJbnQoTWF0aC5yYW5kb20oKSAqIDMwKV0pO1xyXG5cclxuXHRcdHZhciBzdGFjayA9IDAsXHJcblx0XHRcdGJhcnMgPSB0cnVlLFxyXG5cdFx0XHRsaW5lcyA9IGZhbHNlLFxyXG5cdFx0XHRzdGVwcyA9IGZhbHNlO1xyXG5cclxuXHRcdGZ1bmN0aW9uIHBsb3RXaXRoT3B0aW9ucygpIHtcclxuXHRcdFx0JC5wbG90KCQoXCIja3RfZG9jc19mbG90X3N0YWNrXCIpLFxyXG5cclxuXHRcdFx0XHRbe1xyXG5cdFx0XHRcdFx0bGFiZWw6IFwic2FsZXNcIixcclxuXHRcdFx0XHRcdGRhdGE6IGQxLFxyXG5cdFx0XHRcdFx0bGluZXM6IHtcclxuXHRcdFx0XHRcdFx0bGluZVdpZHRoOiAxLFxyXG5cdFx0XHRcdFx0fSxcclxuXHRcdFx0XHRcdHNoYWRvd1NpemU6IDBcclxuXHRcdFx0XHR9LCB7XHJcblx0XHRcdFx0XHRsYWJlbDogXCJ0YXhcIixcclxuXHRcdFx0XHRcdGRhdGE6IGQyLFxyXG5cdFx0XHRcdFx0bGluZXM6IHtcclxuXHRcdFx0XHRcdFx0bGluZVdpZHRoOiAxLFxyXG5cdFx0XHRcdFx0fSxcclxuXHRcdFx0XHRcdHNoYWRvd1NpemU6IDBcclxuXHRcdFx0XHR9LCB7XHJcblx0XHRcdFx0XHRsYWJlbDogXCJwcm9maXRcIixcclxuXHRcdFx0XHRcdGRhdGE6IGQzLFxyXG5cdFx0XHRcdFx0bGluZXM6IHtcclxuXHRcdFx0XHRcdFx0bGluZVdpZHRoOiAxLFxyXG5cdFx0XHRcdFx0fSxcclxuXHRcdFx0XHRcdHNoYWRvd1NpemU6IDBcclxuXHRcdFx0XHR9XSwge1xyXG5cdFx0XHRcdFx0Y29sb3JzOiBbS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtYWN0aXZlLWRhbmdlcicpLCBLVFV0aWwuZ2V0Q3NzVmFyaWFibGVWYWx1ZSgnLS1icy1hY3RpdmUtcHJpbWFyeScpXSxcclxuXHRcdFx0XHRcdHNlcmllczoge1xyXG5cdFx0XHRcdFx0XHRzdGFjazogc3RhY2ssXHJcblx0XHRcdFx0XHRcdGxpbmVzOiB7XHJcblx0XHRcdFx0XHRcdFx0c2hvdzogbGluZXMsXHJcblx0XHRcdFx0XHRcdFx0ZmlsbDogdHJ1ZSxcclxuXHRcdFx0XHRcdFx0XHRzdGVwczogc3RlcHMsXHJcblx0XHRcdFx0XHRcdFx0bGluZVdpZHRoOiAwLCAvLyBpbiBwaXhlbHNcclxuXHRcdFx0XHRcdFx0fSxcclxuXHRcdFx0XHRcdFx0YmFyczoge1xyXG5cdFx0XHRcdFx0XHRcdHNob3c6IGJhcnMsXHJcblx0XHRcdFx0XHRcdFx0YmFyV2lkdGg6IDAuNSxcclxuXHRcdFx0XHRcdFx0XHRsaW5lV2lkdGg6IDAsIC8vIGluIHBpeGVsc1xyXG5cdFx0XHRcdFx0XHRcdHNoYWRvd1NpemU6IDAsXHJcblx0XHRcdFx0XHRcdFx0YWxpZ246ICdjZW50ZXInXHJcblx0XHRcdFx0XHRcdH1cclxuXHRcdFx0XHRcdH0sXHJcblx0XHRcdFx0XHRncmlkOiB7XHJcblx0XHRcdFx0XHRcdHRpY2tDb2xvcjogS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtbGlnaHQtZGFyaycpLFxyXG5cdFx0XHRcdFx0XHRib3JkZXJDb2xvcjogS1RVdGlsLmdldENzc1ZhcmlhYmxlVmFsdWUoJy0tYnMtbGlnaHQtZGFyaycpLFxyXG5cdFx0XHRcdFx0XHRib3JkZXJXaWR0aDogMVxyXG5cdFx0XHRcdFx0fVxyXG5cdFx0XHRcdH1cclxuXHRcdFx0KTtcclxuXHRcdH1cclxuXHJcblx0XHQkKFwiLnN0YWNrQ29udHJvbHMgaW5wdXRcIikuY2xpY2soZnVuY3Rpb24oZSkge1xyXG5cdFx0XHRlLnByZXZlbnREZWZhdWx0KCk7XHJcblx0XHRcdHN0YWNrID0gJCh0aGlzKS52YWwoKSA9PSBcIldpdGggc3RhY2tpbmdcIiA/IHRydWUgOiBudWxsO1xyXG5cdFx0XHRwbG90V2l0aE9wdGlvbnMoKTtcclxuXHRcdH0pO1xyXG5cclxuXHRcdCQoXCIuZ3JhcGhDb250cm9scyBpbnB1dFwiKS5jbGljayhmdW5jdGlvbihlKSB7XHJcblx0XHRcdGUucHJldmVudERlZmF1bHQoKTtcclxuXHRcdFx0YmFycyA9ICQodGhpcykudmFsKCkuaW5kZXhPZihcIkJhcnNcIikgIT0gLTE7XHJcblx0XHRcdGxpbmVzID0gJCh0aGlzKS52YWwoKS5pbmRleE9mKFwiTGluZXNcIikgIT0gLTE7XHJcblx0XHRcdHN0ZXBzID0gJCh0aGlzKS52YWwoKS5pbmRleE9mKFwic3RlcHNcIikgIT0gLTE7XHJcblx0XHRcdHBsb3RXaXRoT3B0aW9ucygpO1xyXG5cdFx0fSk7XHJcblxyXG5cdFx0cGxvdFdpdGhPcHRpb25zKCk7XHJcbiAgICB9XHJcblxyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICBleGFtcGxlU3RhY2soKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uICgpIHtcclxuICAgIEtURmxvdERlbW9TdGFjay5pbml0KCk7XHJcbn0pO1xyXG4iXSwibmFtZXMiOlsiS1RGbG90RGVtb1N0YWNrIiwiZXhhbXBsZVN0YWNrIiwiZDEiLCJpIiwicHVzaCIsInBhcnNlSW50IiwiTWF0aCIsInJhbmRvbSIsImQyIiwiZDMiLCJzdGFjayIsImJhcnMiLCJsaW5lcyIsInN0ZXBzIiwicGxvdFdpdGhPcHRpb25zIiwiJCIsInBsb3QiLCJsYWJlbCIsImRhdGEiLCJsaW5lV2lkdGgiLCJzaGFkb3dTaXplIiwiY29sb3JzIiwiS1RVdGlsIiwiZ2V0Q3NzVmFyaWFibGVWYWx1ZSIsInNlcmllcyIsInNob3ciLCJmaWxsIiwiYmFyV2lkdGgiLCJhbGlnbiIsImdyaWQiLCJ0aWNrQ29sb3IiLCJib3JkZXJDb2xvciIsImJvcmRlcldpZHRoIiwiY2xpY2siLCJlIiwicHJldmVudERlZmF1bHQiLCJ2YWwiLCJpbmRleE9mIiwiaW5pdCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/charts/flotcharts/stack.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/charts/flotcharts/stack.js"]();
/******/ 	
/******/ })()
;