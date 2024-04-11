"use strict";

// Class definition
var InitBasicEditor = function() {
    // Private functions
    var basicEditor = function() {
        var options = {
            selector: "#basic_editor",
            height : "480",
            plugins : 'advlist autolink link lists preview fullscreen',
            toolbar: ['styleselect fontselect fontsizeselect',
            'undo redo | bold italic | link | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | fullscreen preview |'],
        };

        if (KTThemeMode.getMode() === "dark") {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);

    }

    return {
        // Public Functions
        init: function() {
            basicEditor();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    InitBasicEditor.init();
});
