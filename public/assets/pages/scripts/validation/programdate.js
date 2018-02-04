var FormValidation = function () {
    var handleCreateValidation = function () {
        var form2 = $('#programdate_form');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);

        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                currency_id: {
                    required: true,
                    number: true
                },
                nationality_id: {
                    required: true,
                    number: true
                },
                price: {
                    required: true,
                    number: true
                },
                start_date: {
                    required: true,
                    date: true
                },
            },
            invalidHandler: function (event, validator) { //display error alert on form submit
                success2.hide();
                error2.show();
//                App.scrollTo(error2, -200);
            },
            errorPlacement: function (error, element) { // render error placement for each input type
                var icon = $(element).parent('.input-icon').children('i');
                icon.removeClass('fa-check').addClass("fa-warning");
                icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
            },
            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) { // revert the change done by hightlight

            },
            success: function (label, element) {
                var icon = $(element).parent('.input-icon').children('i');
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                icon.removeClass("fa-warning").addClass("fa-check");
            },
            submitHandler: function (form) {
                success2.show();
                error2.hide();
                form[0].submit(); // submit the form
            }
        });
    };

    var handleChangeNationalityAndCurrency = function () {
        var currency_id = $("#currency_id").val();
        var nationality_id = $("#nationality_id").val();
        $("#nationality").val(nationality_id);
        $("#currency").val(currency_id);
    };

    return {
        //main function to initiate the module
        init: function () {
            handleCreateValidation();
            var form_type = $("#form_type").val();
            if (form_type == "edit") {
                handleChangeNationalityAndCurrency();
            }
        }

    };
}();
jQuery(document).ready(function () {
    FormValidation.init();
});