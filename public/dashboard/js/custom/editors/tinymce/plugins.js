"use strict";

// Class definition
var KTFormsTinyMCEPlugins = function() {
    // Private functions
    var examplePlugins = function() {
        tinymce.init({
            selector: '#simple_editor',
            height : "500",
            plugins : 'advlist autolink link image lists charmap print preview code',
            toolbar: ['styleselect fontselect fontsizeselect',
            'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],        
        });
    }

    return {
        // Public Functions
        init: function() {
            examplePlugins();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTFormsTinyMCEPlugins.init();
});
