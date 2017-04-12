define(function (require, exports, module) {
    "use strict";

    console.log(111);

    exports.run = function() {
        var validator = $('#importer-app').find('#importer-form').data('validator');

        validator.addItem({
            element: '#student-remark',
            rule: 'maxlength{max:80}'
        });

        validator.addItem({
            element: '#buy-price',
            rule: 'currency'
        });

    };
});
