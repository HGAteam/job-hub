"use strict";

//
// Datatables.net Initialization
//

// Set Defaults

var defaults = {
    "language": {
        "emptyTable": `${lang.t('No data available in table')}`,
        "info": `${lang.t('Showing')} _START_ ${lang.t('to')}  _END_ ${lang.t('of')} _TOTAL_ ${lang.t('entries')}`,
        "infoEmpty": `${lang.t("Showing 0 to 0 of 0 entries")}`,
        "infoFiltered": `(${lang.t('filtered from')} _MAX_ ${lang.t('total entries')})`,
        "infoThousands": ",",
        "lengthMenu": `${lang.t("Show")} _MENU_ ${lang.t("entries")}`,
        "loadingRecords": `${lang.t('Loading')}...`,
        "processing": `${lang.t('Processing')}...`,
        "search": `${("Search")}:`,
        "zeroRecords": `${lang.t("No matching records found")}`,
        "thousands": ",",
        "paginate": {
			"first": '<i class="first"></i>',
			"last": '<i class="last"></i>',
			"next": '<i class="next"></i>',
			"previous": '<i class="previous"></i>'
		},
        "aria": {
            "sortAscending": ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
        },
        "autoFill": {
            "cancel": "Cancel",
            "fill": "Fill all cells with <i>%d<\/i>",
            "fillHorizontal": "Fill cells horizontally",
            "fillVertical": "Fill cells vertically"
        },
        "buttons": {
            "collection": "Collection <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'\/>",
            "colvis": "Column Visibility",
            "colvisRestore": "Restore visibility",
            "copy": "Copy",
            "copyKeys": "Press ctrl or u2318 + C to copy the table data to your system clipboard.<br><br>To cancel, click this message or press escape.",
            "copySuccess": {
                "1": "Copied 1 row to clipboard",
                "_": "Copied %d rows to clipboard"
            },
            "copyTitle": "Copy to Clipboard",
            "csv": "CSV",
            "excel": "Excel",
            "pageLength": {
                "-1": "Show all rows",
                "_": "Show %d rows"
            },
            "pdf": "PDF",
            "print": "Print",
            "updateState": "Update",
            "stateRestore": "State %d",
            "savedStates": "Saved States",
            "renameState": "Rename",
            "removeState": "Remove",
            "removeAllStates": "Remove All States",
            "createState": "Create State"
        },
        "searchBuilder": {
            "add": "Add Condition",
            "button": {
                "0": "Search Builder",
                "_": "Search Builder (%d)"
            },
            "clearAll": "Clear All",
            "condition": "Condition",
            "conditions": {
                "date": {
                    "after": "After",
                    "before": "Before",
                    "between": "Between",
                    "empty": "Empty",
                    "equals": "Equals",
                    "not": "Not",
                    "notBetween": "Not Between",
                    "notEmpty": "Not Empty"
                },
                "number": {
                    "between": "Between",
                    "empty": "Empty",
                    "equals": "Equals",
                    "gt": "Greater Than",
                    "gte": "Greater Than Equal To",
                    "lt": "Less Than",
                    "lte": "Less Than Equal To",
                    "not": "Not",
                    "notBetween": "Not Between",
                    "notEmpty": "Not Empty"
                },
                "string": {
                    "contains": "Contains",
                    "empty": "Empty",
                    "endsWith": "Ends With",
                    "equals": "Equals",
                    "not": "Not",
                    "notEmpty": "Not Empty",
                    "startsWith": "Starts With",
                    "notContains": "Does Not Contain",
                    "notStartsWith": "Does Not Start With",
                    "notEndsWith": "Does Not End With"
                },
                "array": {
                    "without": "Without",
                    "notEmpty": "Not Empty",
                    "not": "Not",
                    "contains": "Contains",
                    "empty": "Empty",
                    "equals": "Equals"
                }
            },
            "data": "Data",
            "deleteTitle": "Delete filtering rule",
            "leftTitle": "Outdent Criteria",
            "logicAnd": "And",
            "logicOr": "Or",
            "rightTitle": "Indent Criteria",
            "title": {
                "0": "Search Builder",
                "_": "Search Builder (%d)"
            },
            "value": "Value"
        },
        "searchPanes": {
            "clearMessage": "Clear All",
            "collapse": {
                "0": "SearchPanes",
                "_": "SearchPanes (%d)"
            },
            "count": "{total}",
            "countFiltered": "{shown} ({total})",
            "emptyPanes": "No SearchPanes",
            "loadMessage": "Loading SearchPanes",
            "title": "Filters Active - %d",
            "showMessage": "Show All",
            "collapseMessage": "Collapse All"
        },
        "select": {
            "cells": {
                "1": "1 cell selected",
                "_": "%d cells selected"
            },
            "columns": {
                "1": "1 column selected",
                "_": "%d columns selected"
            },
            "rows": {
                "1": "1 row selected",
                "_": "%d rows selected"
            }
        },
        "datetime": {
            "previous": "Previous",
            "next": "Next",
            "hours": "Hour",
            "minutes": "Minute",
            "seconds": "Second",
            "unknown": "-",
            "amPm": [
                "am",
                "pm"
            ],
            "weekdays": [
                "Sun",
                "Mon",
                "Tue",
                "Wed",
                "Thu",
                "Fri",
                "Sat"
            ],
            "months": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ]
        },
        "editor": {
            "close": "Close",
            "create": {
                "button": "New",
                "title": "Create new entry",
                "submit": "Create"
            },
            "edit": {
                "button": "Edit",
                "title": "Edit Entry",
                "submit": "Update"
            },
            "remove": {
                "button": "Delete",
                "title": "Delete",
                "submit": "Delete",
                "confirm": {
                    "_": "Are you sure you wish to delete %d rows?",
                    "1": "Are you sure you wish to delete 1 row?"
                }
            },
            "error": {
                "system": "A system error has occurred (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">More information<\/a>)."
            },
            "multi": {
                "title": "Multiple Values",
                "info": "The selected items contain different values for this input. To edit and set all items for this input to the same value, click or tap here, otherwise they will retain their individual values.",
                "restore": "Undo Changes",
                "noMulti": "This input can be edited individually, but not part of a group. "
            }
        },
        "stateRestore": {
            "renameTitle": "Rename State",
            "renameLabel": "New Name for %s:",
            "renameButton": "Rename",
            "removeTitle": "Remove State",
            "removeSubmit": "Remove",
            "removeJoiner": " and ",
            "removeError": "Failed to remove state.",
            "removeConfirm": "Are you sure you want to remove %s?",
            "emptyStates": "No saved states",
            "emptyError": "Name cannot be empty.",
            "duplicateError": "A state with this name already exists.",
            "creationModal": {
                "toggleLabel": "Includes:",
                "title": "Create New State",
                "select": "Select",
                "searchBuilder": "SearchBuilder",
                "search": "Search",
                "scroller": "Scroll Position",
                "paging": "Paging",
                "order": "Sorting",
                "name": "Name:",
                "columns": {
                    "visible": "Column Visibility",
                    "search": "Column Search"
                },
                "button": "Create"
            }
        }
    },
    "initComplete": function (settings, json) {
        $(this).closest('.dataTables_wrapper').find('.dataTables_filter input').addClass('form-control form-control-solid w-250px').removeClass('form-control-sm');
        $(this).closest('.dataTables_wrapper').find('.custom-select').addClass('form-select form-select-sm form-select-solid');
    },
    "headerCallback": function (thead, data, start, end, display) {
        $(thead).find('th').addClass('text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0');
    },
};

$.extend(true, $.fn.dataTable.defaults, defaults);

$(document).on('draw.dt', function (e, settings) {
    // var api = new $.fn.dataTable.Api(settings);
    // console.log('New DataTable created:', api.table().node());
});

/*! DataTables Bootstrap 4 integration
 * ©2011-2017 SpryMedia Ltd - datatables.net/license
 */

/**
 * DataTables integration for Bootstrap 4. This requires Bootstrap 4 and
 * DataTables 1.10 or newer.
 *
 * This file sets the defaults and adds options to DataTables to style its
 * controls using Bootstrap. See http://datatables.net/manual/styling/bootstrap
 * for further information.
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery', 'datatables.net'], function ($) {
            return factory($, window, document);
        });
    } else if (typeof exports === 'object') {
        // CommonJS
        module.exports = function (root, $) {
            if (!root) {
                root = window;
            }

            if (!$ || !$.fn.dataTable) {
                // Require DataTables, which attaches to jQuery, including
                // jQuery if needed and have a $ property so we can access the
                // jQuery object that is used
                $ = require('datatables.net')(root, $).$;
            }

            return factory($, root, root.document);
        };
    } else {
        // Browser
        factory(jQuery, window, document);
    }
}(function ($, window, document, undefined) {
    'use strict';
    var DataTable = $.fn.dataTable;


    /* Set the defaults for DataTables initialisation */
    $.extend(true, DataTable.defaults, {
        dom:
            "f<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'li>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">",

        renderer: 'bootstrap'
    });


    /* Default class modification */
    $.extend(DataTable.ext.classes, {
        sWrapper: "dataTables_wrapper dt-bootstrap4",
        sFilterInput: "form-control form-control-sm form-control-solid",
        sLengthSelect: "form-select form-select-sm form-select-solid",
        sProcessing: "dataTables_processing",
        sPageButton: "paginate_button page-item"
    });


    /* Bootstrap paging button renderer */
    DataTable.ext.renderer.pageButton.bootstrap = function (settings, host, idx, buttons, page, pages) {
        var api = new DataTable.Api(settings);
        var classes = settings.oClasses;
        var lang = settings.oLanguage.oPaginate;
        var aria = settings.oLanguage.oAria.paginate || {};
        var btnDisplay, btnClass, counter = 0;

        var attach = function (container, buttons) {
            var i, ien, node, button;
            var clickHandler = function (e) {
                e.preventDefault();
                if (!$(e.currentTarget).hasClass('disabled') && api.page() != e.data.action) {
                    api.page(e.data.action).draw('page');
                }
            };

            for (i = 0, ien = buttons.length; i < ien; i++) {
                button = buttons[i];

                if (Array.isArray(button)) {
                    attach(container, button);
                } else {
                    btnDisplay = '';
                    btnClass = '';

                    switch (button) {
                        case 'ellipsis':
                            btnDisplay = '&#x2026;';
                            btnClass = 'disabled';
                            break;

                        case 'first':
                            btnDisplay = lang.sFirst;
                            btnClass = button + (page > 0 ?
                                '' : ' disabled');
                            break;

                        case 'previous':
                            btnDisplay = lang.sPrevious;
                            btnClass = button + (page > 0 ?
                                '' : ' disabled');
                            break;

                        case 'next':
                            btnDisplay = lang.sNext;
                            btnClass = button + (page < pages - 1 ?
                                '' : ' disabled');
                            break;

                        case 'last':
                            btnDisplay = lang.sLast;
                            btnClass = button + (page < pages - 1 ?
                                '' : ' disabled');
                            break;

                        default:
                            btnDisplay = button + 1;
                            btnClass = page === button ?
                                'active' : '';
                            break;
                    }

                    if (btnDisplay) {
                        node = $('<li>', {
                            'class': classes.sPageButton + ' ' + btnClass,
                            'id': idx === 0 && typeof button === 'string' ?
                                settings.sTableId + '_' + button :
                                null
                        })
                            .append($('<a>', {
                                    'href': '#',
                                    'aria-controls': settings.sTableId,
                                    'aria-label': aria[button],
                                    'data-dt-idx': counter,
                                    'tabindex': settings.iTabIndex,
                                    'class': 'page-link'
                                })
                                    .html(btnDisplay)
                            )
                            .appendTo(container);

                        settings.oApi._fnBindAction(
                            node, {action: button}, clickHandler
                        );

                        counter++;
                    }
                }
            }
        };

        // IE9 throws an 'unknown error' if document.activeElement is used
        // inside an iframe or frame.
        var activeEl;

        try {
            // Because this approach is destroying and recreating the paging
            // elements, focus is lost on the select button which is bad for
            // accessibility. So we want to restore focus once the draw has
            // completed
            activeEl = $(host).find(document.activeElement).data('dt-idx');
        } catch (e) {
        }

        attach(
            $(host).empty().html('<ul class="pagination"/>').children('ul'),
            buttons
        );

        if (activeEl !== undefined) {
            $(host).find('[data-dt-idx=' + activeEl + ']').trigger('focus');
        }
    };


    return DataTable;
}));
