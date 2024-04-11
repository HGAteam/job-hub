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

/***/ "./resources/assets/core/plugins/custom/tinymce/plugins/legacyoutput/plugin.js":
/*!*************************************************************************************!*\
  !*** ./resources/assets/core/plugins/custom/tinymce/plugins/legacyoutput/plugin.js ***!
  \*************************************************************************************/
/***/ (() => {

eval("/**\r\n * Copyright (c) Tiny Technologies, Inc. All rights reserved.\r\n * Licensed under the LGPL or a commercial license.\r\n * For LGPL see License.txt in the project root for license information.\r\n * For commercial licenses see https://www.tiny.cloud/\r\n *\r\n * Version: 5.10.7 (2022-12-06)\r\n */\n(function () {\n  'use strict';\n\n  var global$1 = tinymce.util.Tools.resolve('tinymce.PluginManager');\n  var global = tinymce.util.Tools.resolve('tinymce.util.Tools');\n  var getFontSizeFormats = function getFontSizeFormats(editor) {\n    return editor.getParam('fontsize_formats');\n  };\n  var setFontSizeFormats = function setFontSizeFormats(editor, fontsize_formats) {\n    editor.settings.fontsize_formats = fontsize_formats;\n  };\n  var getFontFormats = function getFontFormats(editor) {\n    return editor.getParam('font_formats');\n  };\n  var setFontFormats = function setFontFormats(editor, font_formats) {\n    editor.settings.font_formats = font_formats;\n  };\n  var getFontSizeStyleValues = function getFontSizeStyleValues(editor) {\n    return editor.getParam('font_size_style_values', 'xx-small,x-small,small,medium,large,x-large,xx-large');\n  };\n  var setInlineStyles = function setInlineStyles(editor, inline_styles) {\n    editor.settings.inline_styles = inline_styles;\n  };\n  var overrideFormats = function overrideFormats(editor) {\n    var alignElements = 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table',\n      fontSizes = global.explode(getFontSizeStyleValues(editor)),\n      schema = editor.schema;\n    editor.formatter.register({\n      alignleft: {\n        selector: alignElements,\n        attributes: {\n          align: 'left'\n        }\n      },\n      aligncenter: {\n        selector: alignElements,\n        attributes: {\n          align: 'center'\n        }\n      },\n      alignright: {\n        selector: alignElements,\n        attributes: {\n          align: 'right'\n        }\n      },\n      alignjustify: {\n        selector: alignElements,\n        attributes: {\n          align: 'justify'\n        }\n      },\n      bold: [{\n        inline: 'b',\n        remove: 'all',\n        preserve_attributes: ['class', 'style']\n      }, {\n        inline: 'strong',\n        remove: 'all',\n        preserve_attributes: ['class', 'style']\n      }, {\n        inline: 'span',\n        styles: {\n          fontWeight: 'bold'\n        }\n      }],\n      italic: [{\n        inline: 'i',\n        remove: 'all',\n        preserve_attributes: ['class', 'style']\n      }, {\n        inline: 'em',\n        remove: 'all',\n        preserve_attributes: ['class', 'style']\n      }, {\n        inline: 'span',\n        styles: {\n          fontStyle: 'italic'\n        }\n      }],\n      underline: [{\n        inline: 'u',\n        remove: 'all',\n        preserve_attributes: ['class', 'style']\n      }, {\n        inline: 'span',\n        styles: {\n          textDecoration: 'underline'\n        },\n        exact: true\n      }],\n      strikethrough: [{\n        inline: 'strike',\n        remove: 'all',\n        preserve_attributes: ['class', 'style']\n      }, {\n        inline: 'span',\n        styles: {\n          textDecoration: 'line-through'\n        },\n        exact: true\n      }],\n      fontname: {\n        inline: 'font',\n        toggle: false,\n        attributes: {\n          face: '%value'\n        }\n      },\n      fontsize: {\n        inline: 'font',\n        toggle: false,\n        attributes: {\n          size: function size(vars) {\n            return String(global.inArray(fontSizes, vars.value) + 1);\n          }\n        }\n      },\n      forecolor: {\n        inline: 'font',\n        attributes: {\n          color: '%value'\n        },\n        links: true,\n        remove_similar: true,\n        clear_child_styles: true\n      },\n      hilitecolor: {\n        inline: 'font',\n        styles: {\n          backgroundColor: '%value'\n        },\n        links: true,\n        remove_similar: true,\n        clear_child_styles: true\n      }\n    });\n    global.each('b,i,u,strike'.split(','), function (name) {\n      schema.addValidElements(name + '[*]');\n    });\n    if (!schema.getElementRule('font')) {\n      schema.addValidElements('font[face|size|color|style]');\n    }\n    global.each(alignElements.split(','), function (name) {\n      var rule = schema.getElementRule(name);\n      if (rule) {\n        if (!rule.attributes.align) {\n          rule.attributes.align = {};\n          rule.attributesOrder.push('align');\n        }\n      }\n    });\n  };\n  var overrideSettings = function overrideSettings(editor) {\n    var defaultFontsizeFormats = '8pt=1 10pt=2 12pt=3 14pt=4 18pt=5 24pt=6 36pt=7';\n    var defaultFontsFormats = 'Andale Mono=andale mono,monospace;' + 'Arial=arial,helvetica,sans-serif;' + 'Arial Black=arial black,sans-serif;' + 'Book Antiqua=book antiqua,palatino,serif;' + 'Comic Sans MS=comic sans ms,sans-serif;' + 'Courier New=courier new,courier,monospace;' + 'Georgia=georgia,palatino,serif;' + 'Helvetica=helvetica,arial,sans-serif;' + 'Impact=impact,sans-serif;' + 'Symbol=symbol;' + 'Tahoma=tahoma,arial,helvetica,sans-serif;' + 'Terminal=terminal,monaco,monospace;' + 'Times New Roman=times new roman,times,serif;' + 'Trebuchet MS=trebuchet ms,geneva,sans-serif;' + 'Verdana=verdana,geneva,sans-serif;' + 'Webdings=webdings;' + 'Wingdings=wingdings,zapf dingbats';\n    setInlineStyles(editor, false);\n    if (!getFontSizeFormats(editor)) {\n      setFontSizeFormats(editor, defaultFontsizeFormats);\n    }\n    if (!getFontFormats(editor)) {\n      setFontFormats(editor, defaultFontsFormats);\n    }\n  };\n  var setup = function setup(editor) {\n    overrideSettings(editor);\n    editor.on('PreInit', function () {\n      return overrideFormats(editor);\n    });\n  };\n  function Plugin() {\n    global$1.add('legacyoutput', function (editor) {\n      setup(editor);\n    });\n  }\n  Plugin();\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJnbG9iYWwkMSIsInRpbnltY2UiLCJ1dGlsIiwiVG9vbHMiLCJyZXNvbHZlIiwiZ2xvYmFsIiwiZ2V0Rm9udFNpemVGb3JtYXRzIiwiZWRpdG9yIiwiZ2V0UGFyYW0iLCJzZXRGb250U2l6ZUZvcm1hdHMiLCJmb250c2l6ZV9mb3JtYXRzIiwic2V0dGluZ3MiLCJnZXRGb250Rm9ybWF0cyIsInNldEZvbnRGb3JtYXRzIiwiZm9udF9mb3JtYXRzIiwiZ2V0Rm9udFNpemVTdHlsZVZhbHVlcyIsInNldElubGluZVN0eWxlcyIsImlubGluZV9zdHlsZXMiLCJvdmVycmlkZUZvcm1hdHMiLCJhbGlnbkVsZW1lbnRzIiwiZm9udFNpemVzIiwiZXhwbG9kZSIsInNjaGVtYSIsImZvcm1hdHRlciIsInJlZ2lzdGVyIiwiYWxpZ25sZWZ0Iiwic2VsZWN0b3IiLCJhdHRyaWJ1dGVzIiwiYWxpZ24iLCJhbGlnbmNlbnRlciIsImFsaWducmlnaHQiLCJhbGlnbmp1c3RpZnkiLCJib2xkIiwiaW5saW5lIiwicmVtb3ZlIiwicHJlc2VydmVfYXR0cmlidXRlcyIsInN0eWxlcyIsImZvbnRXZWlnaHQiLCJpdGFsaWMiLCJmb250U3R5bGUiLCJ1bmRlcmxpbmUiLCJ0ZXh0RGVjb3JhdGlvbiIsImV4YWN0Iiwic3RyaWtldGhyb3VnaCIsImZvbnRuYW1lIiwidG9nZ2xlIiwiZmFjZSIsImZvbnRzaXplIiwic2l6ZSIsInZhcnMiLCJTdHJpbmciLCJpbkFycmF5IiwidmFsdWUiLCJmb3JlY29sb3IiLCJjb2xvciIsImxpbmtzIiwicmVtb3ZlX3NpbWlsYXIiLCJjbGVhcl9jaGlsZF9zdHlsZXMiLCJoaWxpdGVjb2xvciIsImJhY2tncm91bmRDb2xvciIsImVhY2giLCJzcGxpdCIsIm5hbWUiLCJhZGRWYWxpZEVsZW1lbnRzIiwiZ2V0RWxlbWVudFJ1bGUiLCJydWxlIiwiYXR0cmlidXRlc09yZGVyIiwicHVzaCIsIm92ZXJyaWRlU2V0dGluZ3MiLCJkZWZhdWx0Rm9udHNpemVGb3JtYXRzIiwiZGVmYXVsdEZvbnRzRm9ybWF0cyIsInNldHVwIiwib24iLCJQbHVnaW4iLCJhZGQiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL3BsdWdpbnMvY3VzdG9tL3RpbnltY2UvcGx1Z2lucy9sZWdhY3lvdXRwdXQvcGx1Z2luLmpzPzI4MjgiXSwic291cmNlc0NvbnRlbnQiOlsiLyoqXHJcbiAqIENvcHlyaWdodCAoYykgVGlueSBUZWNobm9sb2dpZXMsIEluYy4gQWxsIHJpZ2h0cyByZXNlcnZlZC5cclxuICogTGljZW5zZWQgdW5kZXIgdGhlIExHUEwgb3IgYSBjb21tZXJjaWFsIGxpY2Vuc2UuXHJcbiAqIEZvciBMR1BMIHNlZSBMaWNlbnNlLnR4dCBpbiB0aGUgcHJvamVjdCByb290IGZvciBsaWNlbnNlIGluZm9ybWF0aW9uLlxyXG4gKiBGb3IgY29tbWVyY2lhbCBsaWNlbnNlcyBzZWUgaHR0cHM6Ly93d3cudGlueS5jbG91ZC9cclxuICpcclxuICogVmVyc2lvbjogNS4xMC43ICgyMDIyLTEyLTA2KVxyXG4gKi9cclxuKGZ1bmN0aW9uICgpIHtcclxuICAgICd1c2Ugc3RyaWN0JztcclxuXHJcbiAgICB2YXIgZ2xvYmFsJDEgPSB0aW55bWNlLnV0aWwuVG9vbHMucmVzb2x2ZSgndGlueW1jZS5QbHVnaW5NYW5hZ2VyJyk7XHJcblxyXG4gICAgdmFyIGdsb2JhbCA9IHRpbnltY2UudXRpbC5Ub29scy5yZXNvbHZlKCd0aW55bWNlLnV0aWwuVG9vbHMnKTtcclxuXHJcbiAgICB2YXIgZ2V0Rm9udFNpemVGb3JtYXRzID0gZnVuY3Rpb24gKGVkaXRvcikge1xyXG4gICAgICByZXR1cm4gZWRpdG9yLmdldFBhcmFtKCdmb250c2l6ZV9mb3JtYXRzJyk7XHJcbiAgICB9O1xyXG4gICAgdmFyIHNldEZvbnRTaXplRm9ybWF0cyA9IGZ1bmN0aW9uIChlZGl0b3IsIGZvbnRzaXplX2Zvcm1hdHMpIHtcclxuICAgICAgZWRpdG9yLnNldHRpbmdzLmZvbnRzaXplX2Zvcm1hdHMgPSBmb250c2l6ZV9mb3JtYXRzO1xyXG4gICAgfTtcclxuICAgIHZhciBnZXRGb250Rm9ybWF0cyA9IGZ1bmN0aW9uIChlZGl0b3IpIHtcclxuICAgICAgcmV0dXJuIGVkaXRvci5nZXRQYXJhbSgnZm9udF9mb3JtYXRzJyk7XHJcbiAgICB9O1xyXG4gICAgdmFyIHNldEZvbnRGb3JtYXRzID0gZnVuY3Rpb24gKGVkaXRvciwgZm9udF9mb3JtYXRzKSB7XHJcbiAgICAgIGVkaXRvci5zZXR0aW5ncy5mb250X2Zvcm1hdHMgPSBmb250X2Zvcm1hdHM7XHJcbiAgICB9O1xyXG4gICAgdmFyIGdldEZvbnRTaXplU3R5bGVWYWx1ZXMgPSBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgIHJldHVybiBlZGl0b3IuZ2V0UGFyYW0oJ2ZvbnRfc2l6ZV9zdHlsZV92YWx1ZXMnLCAneHgtc21hbGwseC1zbWFsbCxzbWFsbCxtZWRpdW0sbGFyZ2UseC1sYXJnZSx4eC1sYXJnZScpO1xyXG4gICAgfTtcclxuICAgIHZhciBzZXRJbmxpbmVTdHlsZXMgPSBmdW5jdGlvbiAoZWRpdG9yLCBpbmxpbmVfc3R5bGVzKSB7XHJcbiAgICAgIGVkaXRvci5zZXR0aW5ncy5pbmxpbmVfc3R5bGVzID0gaW5saW5lX3N0eWxlcztcclxuICAgIH07XHJcblxyXG4gICAgdmFyIG92ZXJyaWRlRm9ybWF0cyA9IGZ1bmN0aW9uIChlZGl0b3IpIHtcclxuICAgICAgdmFyIGFsaWduRWxlbWVudHMgPSAncCxoMSxoMixoMyxoNCxoNSxoNix0ZCx0aCxkaXYsdWwsb2wsbGksdGFibGUnLCBmb250U2l6ZXMgPSBnbG9iYWwuZXhwbG9kZShnZXRGb250U2l6ZVN0eWxlVmFsdWVzKGVkaXRvcikpLCBzY2hlbWEgPSBlZGl0b3Iuc2NoZW1hO1xyXG4gICAgICBlZGl0b3IuZm9ybWF0dGVyLnJlZ2lzdGVyKHtcclxuICAgICAgICBhbGlnbmxlZnQ6IHtcclxuICAgICAgICAgIHNlbGVjdG9yOiBhbGlnbkVsZW1lbnRzLFxyXG4gICAgICAgICAgYXR0cmlidXRlczogeyBhbGlnbjogJ2xlZnQnIH1cclxuICAgICAgICB9LFxyXG4gICAgICAgIGFsaWduY2VudGVyOiB7XHJcbiAgICAgICAgICBzZWxlY3RvcjogYWxpZ25FbGVtZW50cyxcclxuICAgICAgICAgIGF0dHJpYnV0ZXM6IHsgYWxpZ246ICdjZW50ZXInIH1cclxuICAgICAgICB9LFxyXG4gICAgICAgIGFsaWducmlnaHQ6IHtcclxuICAgICAgICAgIHNlbGVjdG9yOiBhbGlnbkVsZW1lbnRzLFxyXG4gICAgICAgICAgYXR0cmlidXRlczogeyBhbGlnbjogJ3JpZ2h0JyB9XHJcbiAgICAgICAgfSxcclxuICAgICAgICBhbGlnbmp1c3RpZnk6IHtcclxuICAgICAgICAgIHNlbGVjdG9yOiBhbGlnbkVsZW1lbnRzLFxyXG4gICAgICAgICAgYXR0cmlidXRlczogeyBhbGlnbjogJ2p1c3RpZnknIH1cclxuICAgICAgICB9LFxyXG4gICAgICAgIGJvbGQ6IFtcclxuICAgICAgICAgIHtcclxuICAgICAgICAgICAgaW5saW5lOiAnYicsXHJcbiAgICAgICAgICAgIHJlbW92ZTogJ2FsbCcsXHJcbiAgICAgICAgICAgIHByZXNlcnZlX2F0dHJpYnV0ZXM6IFtcclxuICAgICAgICAgICAgICAnY2xhc3MnLFxyXG4gICAgICAgICAgICAgICdzdHlsZSdcclxuICAgICAgICAgICAgXVxyXG4gICAgICAgICAgfSxcclxuICAgICAgICAgIHtcclxuICAgICAgICAgICAgaW5saW5lOiAnc3Ryb25nJyxcclxuICAgICAgICAgICAgcmVtb3ZlOiAnYWxsJyxcclxuICAgICAgICAgICAgcHJlc2VydmVfYXR0cmlidXRlczogW1xyXG4gICAgICAgICAgICAgICdjbGFzcycsXHJcbiAgICAgICAgICAgICAgJ3N0eWxlJ1xyXG4gICAgICAgICAgICBdXHJcbiAgICAgICAgICB9LFxyXG4gICAgICAgICAge1xyXG4gICAgICAgICAgICBpbmxpbmU6ICdzcGFuJyxcclxuICAgICAgICAgICAgc3R5bGVzOiB7IGZvbnRXZWlnaHQ6ICdib2xkJyB9XHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgXSxcclxuICAgICAgICBpdGFsaWM6IFtcclxuICAgICAgICAgIHtcclxuICAgICAgICAgICAgaW5saW5lOiAnaScsXHJcbiAgICAgICAgICAgIHJlbW92ZTogJ2FsbCcsXHJcbiAgICAgICAgICAgIHByZXNlcnZlX2F0dHJpYnV0ZXM6IFtcclxuICAgICAgICAgICAgICAnY2xhc3MnLFxyXG4gICAgICAgICAgICAgICdzdHlsZSdcclxuICAgICAgICAgICAgXVxyXG4gICAgICAgICAgfSxcclxuICAgICAgICAgIHtcclxuICAgICAgICAgICAgaW5saW5lOiAnZW0nLFxyXG4gICAgICAgICAgICByZW1vdmU6ICdhbGwnLFxyXG4gICAgICAgICAgICBwcmVzZXJ2ZV9hdHRyaWJ1dGVzOiBbXHJcbiAgICAgICAgICAgICAgJ2NsYXNzJyxcclxuICAgICAgICAgICAgICAnc3R5bGUnXHJcbiAgICAgICAgICAgIF1cclxuICAgICAgICAgIH0sXHJcbiAgICAgICAgICB7XHJcbiAgICAgICAgICAgIGlubGluZTogJ3NwYW4nLFxyXG4gICAgICAgICAgICBzdHlsZXM6IHsgZm9udFN0eWxlOiAnaXRhbGljJyB9XHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgXSxcclxuICAgICAgICB1bmRlcmxpbmU6IFtcclxuICAgICAgICAgIHtcclxuICAgICAgICAgICAgaW5saW5lOiAndScsXHJcbiAgICAgICAgICAgIHJlbW92ZTogJ2FsbCcsXHJcbiAgICAgICAgICAgIHByZXNlcnZlX2F0dHJpYnV0ZXM6IFtcclxuICAgICAgICAgICAgICAnY2xhc3MnLFxyXG4gICAgICAgICAgICAgICdzdHlsZSdcclxuICAgICAgICAgICAgXVxyXG4gICAgICAgICAgfSxcclxuICAgICAgICAgIHtcclxuICAgICAgICAgICAgaW5saW5lOiAnc3BhbicsXHJcbiAgICAgICAgICAgIHN0eWxlczogeyB0ZXh0RGVjb3JhdGlvbjogJ3VuZGVybGluZScgfSxcclxuICAgICAgICAgICAgZXhhY3Q6IHRydWVcclxuICAgICAgICAgIH1cclxuICAgICAgICBdLFxyXG4gICAgICAgIHN0cmlrZXRocm91Z2g6IFtcclxuICAgICAgICAgIHtcclxuICAgICAgICAgICAgaW5saW5lOiAnc3RyaWtlJyxcclxuICAgICAgICAgICAgcmVtb3ZlOiAnYWxsJyxcclxuICAgICAgICAgICAgcHJlc2VydmVfYXR0cmlidXRlczogW1xyXG4gICAgICAgICAgICAgICdjbGFzcycsXHJcbiAgICAgICAgICAgICAgJ3N0eWxlJ1xyXG4gICAgICAgICAgICBdXHJcbiAgICAgICAgICB9LFxyXG4gICAgICAgICAge1xyXG4gICAgICAgICAgICBpbmxpbmU6ICdzcGFuJyxcclxuICAgICAgICAgICAgc3R5bGVzOiB7IHRleHREZWNvcmF0aW9uOiAnbGluZS10aHJvdWdoJyB9LFxyXG4gICAgICAgICAgICBleGFjdDogdHJ1ZVxyXG4gICAgICAgICAgfVxyXG4gICAgICAgIF0sXHJcbiAgICAgICAgZm9udG5hbWU6IHtcclxuICAgICAgICAgIGlubGluZTogJ2ZvbnQnLFxyXG4gICAgICAgICAgdG9nZ2xlOiBmYWxzZSxcclxuICAgICAgICAgIGF0dHJpYnV0ZXM6IHsgZmFjZTogJyV2YWx1ZScgfVxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgZm9udHNpemU6IHtcclxuICAgICAgICAgIGlubGluZTogJ2ZvbnQnLFxyXG4gICAgICAgICAgdG9nZ2xlOiBmYWxzZSxcclxuICAgICAgICAgIGF0dHJpYnV0ZXM6IHtcclxuICAgICAgICAgICAgc2l6ZTogZnVuY3Rpb24gKHZhcnMpIHtcclxuICAgICAgICAgICAgICByZXR1cm4gU3RyaW5nKGdsb2JhbC5pbkFycmF5KGZvbnRTaXplcywgdmFycy52YWx1ZSkgKyAxKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgZm9yZWNvbG9yOiB7XHJcbiAgICAgICAgICBpbmxpbmU6ICdmb250JyxcclxuICAgICAgICAgIGF0dHJpYnV0ZXM6IHsgY29sb3I6ICcldmFsdWUnIH0sXHJcbiAgICAgICAgICBsaW5rczogdHJ1ZSxcclxuICAgICAgICAgIHJlbW92ZV9zaW1pbGFyOiB0cnVlLFxyXG4gICAgICAgICAgY2xlYXJfY2hpbGRfc3R5bGVzOiB0cnVlXHJcbiAgICAgICAgfSxcclxuICAgICAgICBoaWxpdGVjb2xvcjoge1xyXG4gICAgICAgICAgaW5saW5lOiAnZm9udCcsXHJcbiAgICAgICAgICBzdHlsZXM6IHsgYmFja2dyb3VuZENvbG9yOiAnJXZhbHVlJyB9LFxyXG4gICAgICAgICAgbGlua3M6IHRydWUsXHJcbiAgICAgICAgICByZW1vdmVfc2ltaWxhcjogdHJ1ZSxcclxuICAgICAgICAgIGNsZWFyX2NoaWxkX3N0eWxlczogdHJ1ZVxyXG4gICAgICAgIH1cclxuICAgICAgfSk7XHJcbiAgICAgIGdsb2JhbC5lYWNoKCdiLGksdSxzdHJpa2UnLnNwbGl0KCcsJyksIGZ1bmN0aW9uIChuYW1lKSB7XHJcbiAgICAgICAgc2NoZW1hLmFkZFZhbGlkRWxlbWVudHMobmFtZSArICdbKl0nKTtcclxuICAgICAgfSk7XHJcbiAgICAgIGlmICghc2NoZW1hLmdldEVsZW1lbnRSdWxlKCdmb250JykpIHtcclxuICAgICAgICBzY2hlbWEuYWRkVmFsaWRFbGVtZW50cygnZm9udFtmYWNlfHNpemV8Y29sb3J8c3R5bGVdJyk7XHJcbiAgICAgIH1cclxuICAgICAgZ2xvYmFsLmVhY2goYWxpZ25FbGVtZW50cy5zcGxpdCgnLCcpLCBmdW5jdGlvbiAobmFtZSkge1xyXG4gICAgICAgIHZhciBydWxlID0gc2NoZW1hLmdldEVsZW1lbnRSdWxlKG5hbWUpO1xyXG4gICAgICAgIGlmIChydWxlKSB7XHJcbiAgICAgICAgICBpZiAoIXJ1bGUuYXR0cmlidXRlcy5hbGlnbikge1xyXG4gICAgICAgICAgICBydWxlLmF0dHJpYnV0ZXMuYWxpZ24gPSB7fTtcclxuICAgICAgICAgICAgcnVsZS5hdHRyaWJ1dGVzT3JkZXIucHVzaCgnYWxpZ24nKTtcclxuICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgIH0pO1xyXG4gICAgfTtcclxuICAgIHZhciBvdmVycmlkZVNldHRpbmdzID0gZnVuY3Rpb24gKGVkaXRvcikge1xyXG4gICAgICB2YXIgZGVmYXVsdEZvbnRzaXplRm9ybWF0cyA9ICc4cHQ9MSAxMHB0PTIgMTJwdD0zIDE0cHQ9NCAxOHB0PTUgMjRwdD02IDM2cHQ9Nyc7XHJcbiAgICAgIHZhciBkZWZhdWx0Rm9udHNGb3JtYXRzID0gJ0FuZGFsZSBNb25vPWFuZGFsZSBtb25vLG1vbm9zcGFjZTsnICsgJ0FyaWFsPWFyaWFsLGhlbHZldGljYSxzYW5zLXNlcmlmOycgKyAnQXJpYWwgQmxhY2s9YXJpYWwgYmxhY2ssc2Fucy1zZXJpZjsnICsgJ0Jvb2sgQW50aXF1YT1ib29rIGFudGlxdWEscGFsYXRpbm8sc2VyaWY7JyArICdDb21pYyBTYW5zIE1TPWNvbWljIHNhbnMgbXMsc2Fucy1zZXJpZjsnICsgJ0NvdXJpZXIgTmV3PWNvdXJpZXIgbmV3LGNvdXJpZXIsbW9ub3NwYWNlOycgKyAnR2VvcmdpYT1nZW9yZ2lhLHBhbGF0aW5vLHNlcmlmOycgKyAnSGVsdmV0aWNhPWhlbHZldGljYSxhcmlhbCxzYW5zLXNlcmlmOycgKyAnSW1wYWN0PWltcGFjdCxzYW5zLXNlcmlmOycgKyAnU3ltYm9sPXN5bWJvbDsnICsgJ1RhaG9tYT10YWhvbWEsYXJpYWwsaGVsdmV0aWNhLHNhbnMtc2VyaWY7JyArICdUZXJtaW5hbD10ZXJtaW5hbCxtb25hY28sbW9ub3NwYWNlOycgKyAnVGltZXMgTmV3IFJvbWFuPXRpbWVzIG5ldyByb21hbix0aW1lcyxzZXJpZjsnICsgJ1RyZWJ1Y2hldCBNUz10cmVidWNoZXQgbXMsZ2VuZXZhLHNhbnMtc2VyaWY7JyArICdWZXJkYW5hPXZlcmRhbmEsZ2VuZXZhLHNhbnMtc2VyaWY7JyArICdXZWJkaW5ncz13ZWJkaW5nczsnICsgJ1dpbmdkaW5ncz13aW5nZGluZ3MsemFwZiBkaW5nYmF0cyc7XHJcbiAgICAgIHNldElubGluZVN0eWxlcyhlZGl0b3IsIGZhbHNlKTtcclxuICAgICAgaWYgKCFnZXRGb250U2l6ZUZvcm1hdHMoZWRpdG9yKSkge1xyXG4gICAgICAgIHNldEZvbnRTaXplRm9ybWF0cyhlZGl0b3IsIGRlZmF1bHRGb250c2l6ZUZvcm1hdHMpO1xyXG4gICAgICB9XHJcbiAgICAgIGlmICghZ2V0Rm9udEZvcm1hdHMoZWRpdG9yKSkge1xyXG4gICAgICAgIHNldEZvbnRGb3JtYXRzKGVkaXRvciwgZGVmYXVsdEZvbnRzRm9ybWF0cyk7XHJcbiAgICAgIH1cclxuICAgIH07XHJcbiAgICB2YXIgc2V0dXAgPSBmdW5jdGlvbiAoZWRpdG9yKSB7XHJcbiAgICAgIG92ZXJyaWRlU2V0dGluZ3MoZWRpdG9yKTtcclxuICAgICAgZWRpdG9yLm9uKCdQcmVJbml0JywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIHJldHVybiBvdmVycmlkZUZvcm1hdHMoZWRpdG9yKTtcclxuICAgICAgfSk7XHJcbiAgICB9O1xyXG5cclxuICAgIGZ1bmN0aW9uIFBsdWdpbiAoKSB7XHJcbiAgICAgIGdsb2JhbCQxLmFkZCgnbGVnYWN5b3V0cHV0JywgZnVuY3Rpb24gKGVkaXRvcikge1xyXG4gICAgICAgIHNldHVwKGVkaXRvcik7XHJcbiAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIFBsdWdpbigpO1xyXG5cclxufSgpKTtcclxuIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0MsYUFBWTtFQUNULFlBQVk7O0VBRVosSUFBSUEsUUFBUSxHQUFHQyxPQUFPLENBQUNDLElBQUksQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLENBQUMsdUJBQXVCLENBQUM7RUFFbEUsSUFBSUMsTUFBTSxHQUFHSixPQUFPLENBQUNDLElBQUksQ0FBQ0MsS0FBSyxDQUFDQyxPQUFPLENBQUMsb0JBQW9CLENBQUM7RUFFN0Qs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LGlEQUFpRDtJQUM5RSxJQUFJQyxtQkFBbUIsR0FBRyxvQ0FBb0MsR0FBRyxtQ0FBbUMsR0FBRyxxQ0FBcUMsR0FBRywyQ0FBMkMsR0FBRyx5Q0FBeUMsR0FBRyw0Q0FBNEMsR0FBRyxpQ0FBaUMsR0FBRyx1Q0FBdUMsR0FBRywyQkFBMkIsR0FBRyxnQkFBZ0IsR0FBRywyQ0FBMkMsR0FBRyxxQ0FBcUMsR0FBRyw4Q0FBOEMsR0FBRyw4Q0FBOEMsR0FBRyxvQ0FBb0MsR0FBRyxvQkFBb0IsR0FBRyxtQ0FBbUM7SUFDaHJCdEQsZUFBZSxDQUFDVCxNQUFNLEVBQUUsS0FBSyxDQUFDO0lBQzlCLElBQUksQ0FBQ0Qsa0JBQWtCLENBQUNDLE1BQU0sQ0FBQyxFQUFFO01BQy9CRSxrQkFBa0IsQ0FBQ0YsTUFBTSxFQUFFOEQsc0JBQXNCLENBQUM7SUFDcEQ7SUFDQSxJQUFJLENBQUN6RCxjQUFjLENBQUNMLE1BQU0sQ0FBQyxFQUFFO01BQzNCTSxjQUFjLENBQUNOLE1BQU0sRUFBRStELG1CQUFtQixDQUFDO0lBQzdDO0VBQ0YsQ0FBQztFQUNELElBQUlDLEtBQUssR0FBRyxTQUFSQSxLQUFLQSxDQUFhaEUsTUFBTSxFQUFFO0lBQzVCNkQsZ0JBQWdCLENBQUM3RCxNQUFNLENBQUM7SUFDeEJBLE1BQU0sQ0FBQ2lFLEVBQUUsQ0FBQyxTQUFTLEVBQUUsWUFBWTtNQUMvQixPQUFPdEQsZUFBZSxDQUFDWCxNQUFNLENBQUM7SUFDaEMsQ0FBQyxDQUFDO0VBQ0osQ0FBQztFQUVELFNBQVNrRSxNQUFNQSxDQUFBLEVBQUk7SUFDakJ6RSxRQUFRLENBQUMwRSxHQUFHLENBQUMsY0FBYyxFQUFFLFVBQVVuRSxNQUFNLEVBQUU7TUFDN0NnRSxLQUFLLENBQUNoRSxNQUFNLENBQUM7SUFDZixDQUFDLENBQUM7RUFDSjtFQUVBa0UsTUFBTSxFQUFFO0FBRVosQ0FBQyxHQUFFIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL3BsdWdpbnMvY3VzdG9tL3RpbnltY2UvcGx1Z2lucy9sZWdhY3lvdXRwdXQvcGx1Z2luLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/plugins/custom/tinymce/plugins/legacyoutput/plugin.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/plugins/custom/tinymce/plugins/legacyoutput/plugin.js"]();
/******/ 	
/******/ })()
;