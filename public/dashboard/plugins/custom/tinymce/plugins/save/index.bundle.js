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

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/save/index.js":
/*!****************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/save/index.js ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("// Exports the \"save\" plugin for usage with module loaders\n// Usage:\n//   CommonJS:\n//     require('tinymce/plugins/save')\n//   ES2015:\n//     import 'tinymce/plugins/save'\n__webpack_require__(/*! ./plugin.js */ \"./resources/assets/core/plugins/custom/tinymce/plugins/save/plugin.js\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL3NhdmUvaW5kZXguanMuanMiLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0FBLG1CQUFPLENBQUMsMEZBQWEsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9wbHVnaW5zL2N1c3RvbS90aW55bWNlL3BsdWdpbnMvc2F2ZS9pbmRleC5qcz9lYjMzIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIEV4cG9ydHMgdGhlIFwic2F2ZVwiIHBsdWdpbiBmb3IgdXNhZ2Ugd2l0aCBtb2R1bGUgbG9hZGVyc1xyXG4vLyBVc2FnZTpcclxuLy8gICBDb21tb25KUzpcclxuLy8gICAgIHJlcXVpcmUoJ3RpbnltY2UvcGx1Z2lucy9zYXZlJylcclxuLy8gICBFUzIwMTU6XHJcbi8vICAgICBpbXBvcnQgJ3RpbnltY2UvcGx1Z2lucy9zYXZlJ1xyXG5yZXF1aXJlKCcuL3BsdWdpbi5qcycpOyJdLCJuYW1lcyI6WyJyZXF1aXJlIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/save/index.js\n");

/***/ }),

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/save/plugin.js":
/*!*****************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/save/plugin.js ***!
  \*****************************************************************************/
/***/ (() => {

eval("/**\r\n * Copyright (c) Tiny Technologies, Inc. All rights reserved.\r\n * Licensed under the LGPL or a commercial license.\r\n * For LGPL see License.txt in the project root for license information.\r\n * For commercial licenses see https://www.tiny.cloud/\r\n *\r\n * Version: 5.10.7 (2022-12-06)\r\n */\n(function () {\n  'use strict';\n\n  var global$2 = tinymce.util.Tools.resolve('tinymce.PluginManager');\n  var global$1 = tinymce.util.Tools.resolve('tinymce.dom.DOMUtils');\n  var global = tinymce.util.Tools.resolve('tinymce.util.Tools');\n  var enableWhenDirty = function enableWhenDirty(editor) {\n    return editor.getParam('save_enablewhendirty', true);\n  };\n  var hasOnSaveCallback = function hasOnSaveCallback(editor) {\n    return !!editor.getParam('save_onsavecallback');\n  };\n  var hasOnCancelCallback = function hasOnCancelCallback(editor) {\n    return !!editor.getParam('save_oncancelcallback');\n  };\n  var displayErrorMessage = function displayErrorMessage(editor, message) {\n    editor.notificationManager.open({\n      text: message,\n      type: 'error'\n    });\n  };\n  var save = function save(editor) {\n    var formObj = global$1.DOM.getParent(editor.id, 'form');\n    if (enableWhenDirty(editor) && !editor.isDirty()) {\n      return;\n    }\n    editor.save();\n    if (hasOnSaveCallback(editor)) {\n      editor.execCallback('save_onsavecallback', editor);\n      editor.nodeChanged();\n      return;\n    }\n    if (formObj) {\n      editor.setDirty(false);\n      if (!formObj.onsubmit || formObj.onsubmit()) {\n        if (typeof formObj.submit === 'function') {\n          formObj.submit();\n        } else {\n          displayErrorMessage(editor, 'Error: Form submit field collision.');\n        }\n      }\n      editor.nodeChanged();\n    } else {\n      displayErrorMessage(editor, 'Error: No form element found.');\n    }\n  };\n  var cancel = function cancel(editor) {\n    var h = global.trim(editor.startContent);\n    if (hasOnCancelCallback(editor)) {\n      editor.execCallback('save_oncancelcallback', editor);\n      return;\n    }\n    editor.resetContent(h);\n  };\n  var register$1 = function register$1(editor) {\n    editor.addCommand('mceSave', function () {\n      save(editor);\n    });\n    editor.addCommand('mceCancel', function () {\n      cancel(editor);\n    });\n  };\n  var stateToggle = function stateToggle(editor) {\n    return function (api) {\n      var handler = function handler() {\n        api.setDisabled(enableWhenDirty(editor) && !editor.isDirty());\n      };\n      handler();\n      editor.on('NodeChange dirty', handler);\n      return function () {\n        return editor.off('NodeChange dirty', handler);\n      };\n    };\n  };\n  var register = function register(editor) {\n    editor.ui.registry.addButton('save', {\n      icon: 'save',\n      tooltip: 'Save',\n      disabled: true,\n      onAction: function onAction() {\n        return editor.execCommand('mceSave');\n      },\n      onSetup: stateToggle(editor)\n    });\n    editor.ui.registry.addButton('cancel', {\n      icon: 'cancel',\n      tooltip: 'Cancel',\n      disabled: true,\n      onAction: function onAction() {\n        return editor.execCommand('mceCancel');\n      },\n      onSetup: stateToggle(editor)\n    });\n    editor.addShortcut('Meta+S', '', 'mceSave');\n  };\n  function Plugin() {\n    global$2.add('save', function (editor) {\n      register(editor);\n      register$1(editor);\n    });\n  }\n  Plugin();\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJnbG9iYWwkMiIsInRpbnltY2UiLCJ1dGlsIiwiVG9vbHMiLCJyZXNvbHZlIiwiZ2xvYmFsJDEiLCJnbG9iYWwiLCJlbmFibGVXaGVuRGlydHkiLCJlZGl0b3IiLCJnZXRQYXJhbSIsImhhc09uU2F2ZUNhbGxiYWNrIiwiaGFzT25DYW5jZWxDYWxsYmFjayIsImRpc3BsYXlFcnJvck1lc3NhZ2UiLCJtZXNzYWdlIiwibm90aWZpY2F0aW9uTWFuYWdlciIsIm9wZW4iLCJ0ZXh0IiwidHlwZSIsInNhdmUiLCJmb3JtT2JqIiwiRE9NIiwiZ2V0UGFyZW50IiwiaWQiLCJpc0RpcnR5IiwiZXhlY0NhbGxiYWNrIiwibm9kZUNoYW5nZWQiLCJzZXREaXJ0eSIsIm9uc3VibWl0Iiwic3VibWl0IiwiY2FuY2VsIiwiaCIsInRyaW0iLCJzdGFydENvbnRlbnQiLCJyZXNldENvbnRlbnQiLCJyZWdpc3RlciQxIiwiYWRkQ29tbWFuZCIsInN0YXRlVG9nZ2xlIiwiYXBpIiwiaGFuZGxlciIsInNldERpc2FibGVkIiwib24iLCJvZmYiLCJyZWdpc3RlciIsInVpIiwicmVnaXN0cnkiLCJhZGRCdXR0b24iLCJpY29uIiwidG9vbHRpcCIsImRpc2FibGVkIiwib25BY3Rpb24iLCJleGVjQ29tbWFuZCIsIm9uU2V0dXAiLCJhZGRTaG9ydGN1dCIsIlBsdWdpbiIsImFkZCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvcGx1Z2lucy9jdXN0b20vdGlueW1jZS9wbHVnaW5zL3NhdmUvcGx1Z2luLmpzPzhjNmMiXSwic291cmNlc0NvbnRlbnQiOlsiLyoqXHJcbiAqIENvcHlyaWdodCAoYykgVGlueSBUZWNobm9sb2dpZXMsIEluYy4gQWxsIHJpZ2h0cyByZXNlcnZlZC5cclxuICogTGljZW5zZWQgdW5kZXIgdGhlIExHUEwgb3IgYSBjb21tZXJjaWFsIGxpY2Vuc2UuXHJcbiAqIEZvciBMR1BMIHNlZSBMaWNlbnNlLnR4dCBpbiB0aGUgcHJvamVjdCByb290IGZvciBsaWNlbnNlIGluZm9ybWF0aW9uLlxyXG4gKiBGb3IgY29tbWVyY2lhbCBsaWNlbnNlcyBzZWUgaHR0cHM6Ly93d3cudGlueS5jbG91ZC9cclxuICpcclxuICogVmVyc2lvbjogNS4xMC43ICgyMDIyLTEyLTA2KVxyXG4gKi9cclxuKGZ1bmN0aW9uICgpIHtcclxuICAgICd1c2Ugc3RyaWN0JztcclxuXHJcbiAgICB2YXIgZ2xvYmFsJDIgPSB0aW55bWNlLnV0aWwuVG9vbHMucmVzb2x2ZSgndGlueW1jZS5QbHVnaW5NYW5hZ2VyJyk7XHJcblxyXG4gICAgdmFyIGdsb2JhbCQxID0gdGlueW1jZS51dGlsLlRvb2xzLnJlc29sdmUoJ3RpbnltY2UuZG9tLkRPTVV0aWxzJyk7XHJcblxyXG4gICAgdmFyIGdsb2JhbCA9IHRpbnltY2UudXRpbC5Ub29scy5yZXNvbHZlKCd0aW55bWNlLnV0aWwuVG9vbHMnKTtcclxuXHJcbiAgICB2YXIgZW5hYmxlV2hlbkRpcnR5ID0gZnVuY3Rpb24gKGVkaXRvcikge1xyXG4gICAgICByZXR1cm4gZWRpdG9yLmdldFBhcmFtKCdzYXZlX2VuYWJsZXdoZW5kaXJ0eScsIHRydWUpO1xyXG4gICAgfTtcclxuICAgIHZhciBoYXNPblNhdmVDYWxsYmFjayA9IGZ1bmN0aW9uIChlZGl0b3IpIHtcclxuICAgICAgcmV0dXJuICEhZWRpdG9yLmdldFBhcmFtKCdzYXZlX29uc2F2ZWNhbGxiYWNrJyk7XHJcbiAgICB9O1xyXG4gICAgdmFyIGhhc09uQ2FuY2VsQ2FsbGJhY2sgPSBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgIHJldHVybiAhIWVkaXRvci5nZXRQYXJhbSgnc2F2ZV9vbmNhbmNlbGNhbGxiYWNrJyk7XHJcbiAgICB9O1xyXG5cclxuICAgIHZhciBkaXNwbGF5RXJyb3JNZXNzYWdlID0gZnVuY3Rpb24gKGVkaXRvciwgbWVzc2FnZSkge1xyXG4gICAgICBlZGl0b3Iubm90aWZpY2F0aW9uTWFuYWdlci5vcGVuKHtcclxuICAgICAgICB0ZXh0OiBtZXNzYWdlLFxyXG4gICAgICAgIHR5cGU6ICdlcnJvcidcclxuICAgICAgfSk7XHJcbiAgICB9O1xyXG4gICAgdmFyIHNhdmUgPSBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgIHZhciBmb3JtT2JqID0gZ2xvYmFsJDEuRE9NLmdldFBhcmVudChlZGl0b3IuaWQsICdmb3JtJyk7XHJcbiAgICAgIGlmIChlbmFibGVXaGVuRGlydHkoZWRpdG9yKSAmJiAhZWRpdG9yLmlzRGlydHkoKSkge1xyXG4gICAgICAgIHJldHVybjtcclxuICAgICAgfVxyXG4gICAgICBlZGl0b3Iuc2F2ZSgpO1xyXG4gICAgICBpZiAoaGFzT25TYXZlQ2FsbGJhY2soZWRpdG9yKSkge1xyXG4gICAgICAgIGVkaXRvci5leGVjQ2FsbGJhY2soJ3NhdmVfb25zYXZlY2FsbGJhY2snLCBlZGl0b3IpO1xyXG4gICAgICAgIGVkaXRvci5ub2RlQ2hhbmdlZCgpO1xyXG4gICAgICAgIHJldHVybjtcclxuICAgICAgfVxyXG4gICAgICBpZiAoZm9ybU9iaikge1xyXG4gICAgICAgIGVkaXRvci5zZXREaXJ0eShmYWxzZSk7XHJcbiAgICAgICAgaWYgKCFmb3JtT2JqLm9uc3VibWl0IHx8IGZvcm1PYmoub25zdWJtaXQoKSkge1xyXG4gICAgICAgICAgaWYgKHR5cGVvZiBmb3JtT2JqLnN1Ym1pdCA9PT0gJ2Z1bmN0aW9uJykge1xyXG4gICAgICAgICAgICBmb3JtT2JqLnN1Ym1pdCgpO1xyXG4gICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgZGlzcGxheUVycm9yTWVzc2FnZShlZGl0b3IsICdFcnJvcjogRm9ybSBzdWJtaXQgZmllbGQgY29sbGlzaW9uLicpO1xyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgICBlZGl0b3Iubm9kZUNoYW5nZWQoKTtcclxuICAgICAgfSBlbHNlIHtcclxuICAgICAgICBkaXNwbGF5RXJyb3JNZXNzYWdlKGVkaXRvciwgJ0Vycm9yOiBObyBmb3JtIGVsZW1lbnQgZm91bmQuJyk7XHJcbiAgICAgIH1cclxuICAgIH07XHJcbiAgICB2YXIgY2FuY2VsID0gZnVuY3Rpb24gKGVkaXRvcikge1xyXG4gICAgICB2YXIgaCA9IGdsb2JhbC50cmltKGVkaXRvci5zdGFydENvbnRlbnQpO1xyXG4gICAgICBpZiAoaGFzT25DYW5jZWxDYWxsYmFjayhlZGl0b3IpKSB7XHJcbiAgICAgICAgZWRpdG9yLmV4ZWNDYWxsYmFjaygnc2F2ZV9vbmNhbmNlbGNhbGxiYWNrJywgZWRpdG9yKTtcclxuICAgICAgICByZXR1cm47XHJcbiAgICAgIH1cclxuICAgICAgZWRpdG9yLnJlc2V0Q29udGVudChoKTtcclxuICAgIH07XHJcblxyXG4gICAgdmFyIHJlZ2lzdGVyJDEgPSBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgIGVkaXRvci5hZGRDb21tYW5kKCdtY2VTYXZlJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIHNhdmUoZWRpdG9yKTtcclxuICAgICAgfSk7XHJcbiAgICAgIGVkaXRvci5hZGRDb21tYW5kKCdtY2VDYW5jZWwnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgY2FuY2VsKGVkaXRvcik7XHJcbiAgICAgIH0pO1xyXG4gICAgfTtcclxuXHJcbiAgICB2YXIgc3RhdGVUb2dnbGUgPSBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgIHJldHVybiBmdW5jdGlvbiAoYXBpKSB7XHJcbiAgICAgICAgdmFyIGhhbmRsZXIgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICBhcGkuc2V0RGlzYWJsZWQoZW5hYmxlV2hlbkRpcnR5KGVkaXRvcikgJiYgIWVkaXRvci5pc0RpcnR5KCkpO1xyXG4gICAgICAgIH07XHJcbiAgICAgICAgaGFuZGxlcigpO1xyXG4gICAgICAgIGVkaXRvci5vbignTm9kZUNoYW5nZSBkaXJ0eScsIGhhbmRsZXIpO1xyXG4gICAgICAgIHJldHVybiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICByZXR1cm4gZWRpdG9yLm9mZignTm9kZUNoYW5nZSBkaXJ0eScsIGhhbmRsZXIpO1xyXG4gICAgICAgIH07XHJcbiAgICAgIH07XHJcbiAgICB9O1xyXG4gICAgdmFyIHJlZ2lzdGVyID0gZnVuY3Rpb24gKGVkaXRvcikge1xyXG4gICAgICBlZGl0b3IudWkucmVnaXN0cnkuYWRkQnV0dG9uKCdzYXZlJywge1xyXG4gICAgICAgIGljb246ICdzYXZlJyxcclxuICAgICAgICB0b29sdGlwOiAnU2F2ZScsXHJcbiAgICAgICAgZGlzYWJsZWQ6IHRydWUsXHJcbiAgICAgICAgb25BY3Rpb246IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgIHJldHVybiBlZGl0b3IuZXhlY0NvbW1hbmQoJ21jZVNhdmUnKTtcclxuICAgICAgICB9LFxyXG4gICAgICAgIG9uU2V0dXA6IHN0YXRlVG9nZ2xlKGVkaXRvcilcclxuICAgICAgfSk7XHJcbiAgICAgIGVkaXRvci51aS5yZWdpc3RyeS5hZGRCdXR0b24oJ2NhbmNlbCcsIHtcclxuICAgICAgICBpY29uOiAnY2FuY2VsJyxcclxuICAgICAgICB0b29sdGlwOiAnQ2FuY2VsJyxcclxuICAgICAgICBkaXNhYmxlZDogdHJ1ZSxcclxuICAgICAgICBvbkFjdGlvbjogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgcmV0dXJuIGVkaXRvci5leGVjQ29tbWFuZCgnbWNlQ2FuY2VsJyk7XHJcbiAgICAgICAgfSxcclxuICAgICAgICBvblNldHVwOiBzdGF0ZVRvZ2dsZShlZGl0b3IpXHJcbiAgICAgIH0pO1xyXG4gICAgICBlZGl0b3IuYWRkU2hvcnRjdXQoJ01ldGErUycsICcnLCAnbWNlU2F2ZScpO1xyXG4gICAgfTtcclxuXHJcbiAgICBmdW5jdGlvbiBQbHVnaW4gKCkge1xyXG4gICAgICBnbG9iYWwkMi5hZGQoJ3NhdmUnLCBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgICAgcmVnaXN0ZXIoZWRpdG9yKTtcclxuICAgICAgICByZWdpc3RlciQxKGVkaXRvcik7XHJcbiAgICAgIH0pO1xyXG4gICAg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QUFJO01BQ2RDLFFBQVEsRUFBRSxTQUFBQSxTQUFBLEVBQVk7UUFDcEIsT0FBT3pDLE1BQU0sQ0FBQzBDLFdBQVcsQ0FBQyxTQUFTLENBQUM7TUFDdEMsQ0FBQztNQUNEQyxPQUFPLEVBQUVmLFdBQVcsQ0FBQzVCLE1BQU07SUFDN0IsQ0FBQyxDQUFDO0lBQ0ZBLE1BQU0sQ0FBQ21DLEVBQUUsQ0FBQ0MsUUFBUSxDQUFDQyxTQUFTLENBQUMsUUFBUSxFQUFFO01BQ3JDQyxJQUFJLEVBQUUsUUFBUTtNQUNkQyxPQUFPLEVBQUUsUUFBUTtNQUNqQkMsUUFBUSxFQUFFLElBQUk7TUFDZEMsUUFBUSxFQUFFLFNBQUFBLFNBQUEsRUFBWTtRQUNwQixPQUFPekMsTUFBTSxDQUFDMEMsV0FBVyxDQUFDLFdBQVcsQ0FBQztNQUN4QyxDQUFDO01BQ0RDLE9BQU8sRUFBRWYsV0FBVyxDQUFDNUIsTUFBTTtJQUM3QixDQUFDLENBQUM7SUFDRkEsTUFBTSxDQUFDNEMsV0FBVyxDQUFDLFFBQVEsRUFBRSxFQUFFLEVBQUUsU0FBUyxDQUFDO0VBQzdDLENBQUM7RUFFRCxTQUFTQyxNQUFNQSxDQUFBLEVBQUk7SUFDakJyRCxRQUFRLENBQUNzRCxHQUFHLENBQUMsTUFBTSxFQUFFLFVBQVU5QyxNQUFNLEVBQUU7TUFDckNrQyxRQUFRLENBQUNsQyxNQUFNLENBQUM7TUFDaEIwQixVQUFVLENBQUMxQixNQUFNLENBQUM7SUFDcEIsQ0FBQyxDQUFDO0VBQ0o7RUFFQTZDLE1BQU0sRUFBRTtBQUVaLENBQUMsR0FBRSIsImZpbGUiOiIuL3Jlc291cmNlcy9hc3NldHMvY29yZS9wbHVnaW5zL2N1c3RvbS90aW55bWNlL3BsdWdpbnMvc2F2ZS9wbHVnaW4uanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/save/plugin.js\n");

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
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/core/plugins/custom/tinymce/plugins/save/index.js");
/******/ 	
/******/ })()
;