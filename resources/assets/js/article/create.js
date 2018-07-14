try {
    window.$ = window.jQuery = require('jquery');

    $(document).ready(function () {
        CKEDITOR.replace('preview_text');
        CKEDITOR.replace('detail_text');
    });
} catch (e) {
    console.log('Error!');
}