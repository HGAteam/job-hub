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

/***/ "./resources/assets/core/js/custom/documentation/general/jkanban/restricted.js":
/*!*************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/general/jkanban/restricted.js ***!
  \*************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTJKanbanDemoRestricted = function () {\n  // Private functions\n  var exampleRestricted = function exampleRestricted() {\n    var kanban = new jKanban({\n      element: '#kt_docs_jkanban_restricted',\n      gutter: '0',\n      widthBoard: '250px',\n      click: function click(el) {\n        alert(el.innerHTML);\n      },\n      boards: [{\n        'id': '_todo',\n        'title': 'To Do',\n        'class': 'light-primary',\n        'dragTo': ['_working'],\n        'item': [{\n          'title': 'My Task Test',\n          'class': 'primary'\n        }, {\n          'title': 'Buy Milk',\n          'class': 'primary'\n        }]\n      }, {\n        'id': '_working',\n        'title': 'Working',\n        'class': 'light-warning',\n        'item': [{\n          'title': 'Do Something!',\n          'class': 'warning'\n        }, {\n          'title': 'Run?',\n          'class': 'warning'\n        }]\n      }, {\n        'id': '_done',\n        'title': 'Done',\n        'class': 'light-success',\n        'dragTo': ['_working'],\n        'item': [{\n          'title': 'All right',\n          'class': 'success'\n        }, {\n          'title': 'Ok!',\n          'class': 'success'\n        }]\n      }, {\n        'id': '_notes',\n        'title': 'Notes',\n        'class': 'light-danger',\n        'item': [{\n          'title': 'Warning Task',\n          'class': 'danger'\n        }, {\n          'title': 'Do not enter',\n          'class': 'danger'\n        }]\n      }]\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleRestricted();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTJKanbanDemoRestricted.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qa2FuYmFuL3Jlc3RyaWN0ZWQuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSx1QkFBdUIsR0FBRyxZQUFXO0VBQ3JDO0VBQ0EsSUFBSUMsaUJBQWlCLEdBQUcsU0FBcEJBLGlCQUFpQkEsQ0FBQSxFQUFjO0lBQy9CLElBQUlDLE1BQU0sR0FBRyxJQUFJQyxPQUFPLENBQUM7TUFDckJDLE9BQU8sRUFBRSw2QkFBNkI7TUFDdENDLE1BQU0sRUFBRSxHQUFHO01BQ1hDLFVBQVUsRUFBRSxPQUFPO01BQ25CQyxLQUFLLEVBQUUsU0FBQUEsTUFBU0MsRUFBRSxFQUFFO1FBQ2hCQyxLQUFLLENBQUNELEVBQUUsQ0FBQ0UsU0FBUyxDQUFDO01BQ3ZCLENBQUM7TUFDREMsTUFBTSxFQUFFLENBQUM7UUFDRCxJQUFJLEVBQUUsT0FBTztRQUNiLE9BQU8sRUFBRSxPQUFPO1FBQ2hCLE9BQU8sRUFBRSxlQUFlO1FBQ3hCLFFBQVEsRUFBRSxDQUFDLFVBQVUsQ0FBQztRQUN0QixNQUFNLEVBQUUsQ0FBQztVQUNELE9BQU8sRUFBRSxjQUFjO1VBQ3ZCLE9BQU8sRUFBRTtRQUNiLENBQUMsRUFDRDtVQUNJLE9BQU8sRUFBRSxVQUFVO1VBQ25CLE9BQU8sRUFBRTtRQUNiLENBQUM7TUFFVCxDQUFDLEVBQ0Q7UUFDSSxJQUFJLEVBQUUsVUFBVTtRQUNoQixPQUFPLEVBQUUsU0FBUztRQUNsQixPQUFPLEVBQUUsZUFBZTtRQUN4QixNQUFNLEVBQUUsQ0FBQztVQUNELE9BQU8sRUFBRSxlQUFlO1VBQ3hCLE9BQU8sRUFBRTtRQUNiLENBQUMsRUFDRDtVQUNJLE9BQU8sRUFBRSxNQUFNO1VBQ2YsT0FBTyxFQUFFO1FBQ2IsQ0FBQztNQUVULENBQUMsRUFDRDtRQUNJLElBQUksRUFBRSxPQUFPO1FBQ2IsT0FBTyxFQUFFLE1BQU07UUFDZixPQUFPLEVBQUUsZUFBZTtRQUN4QixRQUFRLEVBQUUsQ0FBQyxVQUFVLENBQUM7UUFDdEIsTUFBTSxFQUFFLENBQUM7VUFDRCxPQUFPLEVBQUUsV0FBVztVQUNwQixPQUFPLEVBQUU7UUFDYixDQUFDLEVBQ0Q7VUFDSSxPQUFPLEVBQUUsS0FBSztVQUNkLE9BQU8sRUFBRTtRQUNiLENBQUM7TUFFVCxDQUFDLEVBQ0Q7UUFDSSxJQUFJLEVBQUUsUUFBUTtRQUNkLE9BQU8sRUFBRSxPQUFPO1FBQ2hCLE9BQU8sRUFBRSxjQUFjO1FBQ3ZCLE1BQU0sRUFBRSxDQUFDO1VBQ0QsT0FBTyxFQUFFLGNBQWM7VUFDdkIsT0FBTyxFQUFFO1FBQ2IsQ0FBQyxFQUNEO1VBQ0ksT0FBTyxFQUFFLGNBQWM7VUFDdkIsT0FBTyxFQUFFO1FBQ2IsQ0FBQztNQUVULENBQUM7SUFFVCxDQUFDLENBQUM7RUFDTixDQUFDO0VBRUQsT0FBTztJQUNIO0lBQ0FDLElBQUksRUFBRSxTQUFBQSxLQUFBLEVBQVc7TUFDYlgsaUJBQWlCLEVBQUU7SUFDdkI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0FZLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBVztFQUNqQ2QsdUJBQXVCLENBQUNZLElBQUksRUFBRTtBQUNsQyxDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qa2FuYmFuL3Jlc3RyaWN0ZWQuanM/MjU2MSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtUSkthbmJhbkRlbW9SZXN0cmljdGVkID0gZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGVSZXN0cmljdGVkID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdmFyIGthbmJhbiA9IG5ldyBqS2FuYmFuKHtcclxuICAgICAgICAgICAgZWxlbWVudDogJyNrdF9kb2NzX2prYW5iYW5fcmVzdHJpY3RlZCcsXHJcbiAgICAgICAgICAgIGd1dHRlcjogJzAnLFxyXG4gICAgICAgICAgICB3aWR0aEJvYXJkOiAnMjUwcHgnLFxyXG4gICAgICAgICAgICBjbGljazogZnVuY3Rpb24oZWwpIHtcclxuICAgICAgICAgICAgICAgIGFsZXJ0KGVsLmlubmVySFRNTCk7XHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGJvYXJkczogW3tcclxuICAgICAgICAgICAgICAgICAgICAnaWQnOiAnX3RvZG8nLFxyXG4gICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdUbyBEbycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2NsYXNzJzogJ2xpZ2h0LXByaW1hcnknLFxyXG4gICAgICAgICAgICAgICAgICAgICdkcmFnVG8nOiBbJ193b3JraW5nJ10sXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogJ015IFRhc2sgVGVzdCcsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAncHJpbWFyeSdcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogJ0J1eSBNaWxrJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICdjbGFzcyc6ICdwcmltYXJ5J1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICAnaWQnOiAnX3dvcmtpbmcnLFxyXG4gICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdXb3JraW5nJyxcclxuICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnbGlnaHQtd2FybmluZycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2l0ZW0nOiBbe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogJ0RvIFNvbWV0aGluZyEnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2NsYXNzJzogJ3dhcm5pbmcnXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdSdW4/JyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICdjbGFzcyc6ICd3YXJuaW5nJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICAnaWQnOiAnX2RvbmUnLFxyXG4gICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdEb25lJyxcclxuICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnbGlnaHQtc3VjY2VzcycsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2RyYWdUbyc6IFsnX3dvcmtpbmcnXSxcclxuICAgICAgICAgICAgICAgICAgICAnaXRlbSc6IFt7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiAnQWxsIHJpZ2h0JyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICdjbGFzcyc6ICdzdWNjZXNzJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiAnT2shJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICdjbGFzcyc6ICdzdWNjZXNzJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICAnaWQnOiAnX25vdGVzJyxcclxuICAgICAgICAgICAgICAgICAgICAndGl0bGUnOiAnTm90ZXMnLFxyXG4gICAgICAgICAgICAgICAgICAgICdjbGFzcyc6ICdsaWdodC1kYW5nZXInLFxyXG4gICAgICAgICAgICAgICAgICAgICdpdGVtJzogW3tcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICd0aXRsZSc6ICdXYXJuaW5nIFRhc2snLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2NsYXNzJzogJ2RhbmdlcidcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3RpdGxlJzogJ0RvIG5vdCBlbnRlcicsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAnY2xhc3MnOiAnZGFuZ2VyJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgXVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBdXHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICAvLyBQdWJsaWMgRnVuY3Rpb25zXHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIGV4YW1wbGVSZXN0cmljdGVkKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcclxuICAgIEtUSkthbmJhbkRlbW9SZXN0cmljdGVkLmluaXQoKTtcclxufSk7XHJcbiJdLCJuYW1lcyI6WyJLVEpLYW5iYW5EZW1vUmVzdHJpY3RlZCIsImV4YW1wbGVSZXN0cmljdGVkIiwia2FuYmFuIiwiakthbmJhbiIsImVsZW1lbnQiLCJndXR0ZXIiLCJ3aWR0aEJvYXJkIiwiY2xpY2siLCJlbCIsImFsZXJ0IiwiaW5uZXJIVE1MIiwiYm9hcmRzIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/general/jkanban/restricted.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/general/jkanban/restricted.js"]();
/******/ 	
/******/ })()
;