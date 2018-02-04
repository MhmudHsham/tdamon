var FormValidation = function () {
    var handleEditValidation = function () {
        var form2 = $('#settings_form');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);

        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                site_title_en: {
                    required: true
                },
                site_description_en: {
                    required: true,
                },
                site_keywords_en: {
                    required: true,
                },
                site_title_ar: {
                    required: true
                },
                site_description_ar: {
                    required: true,
                },
                site_keywords_ar: {
                    required: true,
                },
                site_title_ur: {
                    required: true
                },
                site_description_ur: {
                    required: true,
                },
                site_keywords_ur: {
                    required: true,
                },
                site_email: {
                    required: true,
                    email: true
                },
                site_phone: {
                    required: true,
                    number: true,
                    minlength: 5
                },
                site_fax: {
                    number: true
                },
                site_address_en: {
                    required: true,
                    minlength: 10
                },
                about_us_en: {
                    required: true,
                    minlength: 10
                },
                vision_en: {
                    required: true,
                    minlength: 10
                },
                mission_en: {
                    required: true,
                    minlength: 10
                },
                goal_en: {
                    required: true,
                    minlength: 10
                },
                site_address_ar: {
                    required: true,
                    minlength: 10
                },
                about_us_ar: {
                    required: true,
                    minlength: 10
                },
                vision_ar: {
                    required: true,
                    minlength: 10
                },
                mission_ar: {
                    required: true,
                    minlength: 10
                },
                goal_ar: {
                    required: true,
                    minlength: 10
                },
                site_address_ur: {
                    required: true,
                    minlength: 10
                },
                about_us_ur: {
                    required: true,
                    minlength: 10
                },
                vision_ur: {
                    required: true,
                    minlength: 10
                },
                mission_ur: {
                    required: true,
                    minlength: 10
                },
                goal_ur: {
                    required: true,
                    minlength: 10
                },
                site_facebook: {
                    url: true
                },
                site_twitter: {
                    url: true
                },
                site_linkedin: {
                    url: true
                },
                site_instagram: {
                    url: true
                },
                site_gplus: {
                    url: true
                },
                site_youtube: {
                    url: true
                }
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
                handleSubmit(form);
//                form[0].submit(); // submit the form
            }
        });


    };

    var handleSubmit = function (form) {
        var formData = new FormData(form[0]);
        var href = $('#settings_form').attr("action");
        $.ajax({
            url: href,
            type: "post",
            data: {data: formData},
            success: function (msg) {
                console.log(msg);
                var result = JSON.parse(msg);
                if (result.type == "success") {
                    toastr.success(result.message);
                } else {
                    toastr.error(result.message);
                }
            }
        });
    }



    return {
        //main function to initiate the module
        init: function () {
            handleEditValidation();
        }

    };

}();

jQuery(document).ready(function () {
    FormValidation.init();
});