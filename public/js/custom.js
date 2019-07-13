$(document).ready(function () {
    /**
     * always active first language tab
     */
    $('.languages li:first-child a').tab('show');

    /**
     * Save form
     */
    $('.save-form').click(function () {
        var form = $(this).data('form');
        $(form).submit();
    });

    /**
     * Config Text Editor
     */
    CKEDITOR.replaceClass = 'ckeditor';

});