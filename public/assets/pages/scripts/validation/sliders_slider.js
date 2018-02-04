
var FormValidation = function () {
    var handleCreateValidation = function () {
        $("#sliders_slider_form").on("submit", function () {
            flag = true;
            var image = $("input[type='file']").val();
            if (image == "" || image == "undefined") {
                flag = false;
                $("input[type='file']").css("border", "1px solid red");
                $("input[type='file']").closest(".form-group").find("label").css("color", "1px solid red");
            }
            return flag;
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            handleCreateValidation();
        }

    };

}();

jQuery(document).ready(function () {
    FormValidation.init();
});