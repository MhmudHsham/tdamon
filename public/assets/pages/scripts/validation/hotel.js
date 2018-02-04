var FormValidation = function () {
    var handleCreateValidation = function () {
        var form2 = $('#hotel_form');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);
        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                title_ar: {
                    required: true
                },
                title_en: {
                    required: true
                },
                title_ur: {
                    required: true
                },
                content_ar: {
                    required: true
                },
                content_en: {
                    required: true
                },
                content_ur: {
                    required: true
                },
                country_id: {
                    required: true,
                    number: true
                },
                city_id: {
                    required: true,
                    number: true
                },
                image: {
                    required: true
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
                form[0].submit(); // submit the form
            }
        });
    };
    var validateRoom = function () {
        var form2 = $('#hotel_form');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);
        jQuery.validator.addMethod("largerThan", function (value, element, params) {
            if (!/Invalid|NaN/.test(new Date(value))) {
                return new Date(value) > new Date($(params).val());
            }
            return isNaN(value) && isNaN($(params).val())
                    || (Number(value) > Number($(params).val()));
        }, "sdsdf");
        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                room_id: {
                    required: true,
                    number: true
                },
                meal_id: {
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
                end_date: {
                    required: true,
                    date: true,
//                    greaterThan: "#start_date"
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
                form[0].submit(); // submit the form
            }
        });
    };
    var handleEditValidation = function () {
        var form2 = $('#hotel_form');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);
        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                title_ar: {
                    required: true
                },
                title_en: {
                    required: true
                },
                title_ur: {
                    required: true
                },
                content_ar: {
                    required: true
                },
                content_en: {
                    required: true
                },
                content_ur: {
                    required: true
                },
                url: {
                    url: true
                },
                country_id: {
                    required: true,
                    number: true
                },
                city_id: {
                    required: true,
                    number: true
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
    var handleSetCountry = function () {
        var country_id = $("#country_id").val();
        var city_id = $("#city_id").val();
        $("select[name='country_id']").val(country_id);
        $("select[name='city_id']").val(city_id);
    };
    var handleChangeCountry = function () {
        $(document).on("change", "#country", function () {
            $("#city_block").fadeOut(500);
            var country_id = $(this).val();
            $.ajax({
                url: config.admin_url + "/hotels/getCitiesByCountry/" + country_id,
                type: "get",
                data: {},
                success: function (msg) {
                    var html = "<option selected disabled value=''>اختر المدينة</option>";
                    var result = JSON.parse(msg);
                    for (var i = 0 in result) {
                        html += "<option value='" + result[i].id + "'>" + result[i].title_ar + "</option>";
                    }
                    console.log(html);
                    $("#city_block").fadeIn(500);
                    $("#city").html(html);
                }
            });
        });
    };
    var handleFeaturesChecked = function () {
        var selected_features = JSON.parse($("#selected_features").val());
        var selected_features_array = Object.values(selected_features);
        $(".features").each(function () {
            var $this = $(this);
            var current_value = $this.val();
            if ($.inArray(current_value, selected_features_array) > -1) {
                $this.attr('checked', "checked");
                $this.closest("label").find('.icheckbox_minimal-grey').addClass("checked");
            }
        });
    };
    var handleSlider = function () {
        $("#hotel_slider_form").on("submit", function () {
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

    var handleSetRoom = function () {
        var room_id = $("#room_id").val();
        $("#room").val(room_id);
        var meal_id = $("#meal_id").val();
        $("#meal").val(meal_id);
        var currency_id = $("#currency_id").val();
        $("#currency").val(currency_id);
    };
    return {
        //main function to initiate the module
        init: function () {

            var form_type = $("#form_type").val();
            if (form_type == "add") {
                handleCreateValidation();
            } else if (form_type == "slider") {
                handleSlider();
            } else if (form_type == "room") {
                validateRoom();
            } else if (form_type == "edit_room") {
                handleSetRoom();
            } else {
                handleEditValidation();
                handleSetCountry();
                handleFeaturesChecked();
            }
            handleChangeCountry();
        }

    };
}();
jQuery(document).ready(function () {
    FormValidation.init();
});