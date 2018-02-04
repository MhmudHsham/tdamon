var FormValidation = function () {
    var handleCreateValidation = function () {
        var form2 = $('#program_form');
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
                category_id: {
                    required: true,
                    number: true
                },
                hotel_id: {
                    required: true,
                    number: true
                },
                stars: {
                    required: true,
                    number: true
                },
                nights: {
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

    var handleEditValidation = function () {
        var form2 = $('#program_form');
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
                category_id: {
                    required: true,
                    number: true
                },
                nights: {
                    required: true,
                    number: true
                },
                city_id: {
                    required: true,
                    number: true
                },
                hotel_id: {
                    required: true,
                    number: true
                },
                stars: {
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

    var handleChangeCountry = function () {
        $(document).on("change", "#country", function () {
            $(".city_block").fadeOut(500);
            var country_id = $(this).val();
            $.ajax({
                url: config.admin_url + "/programs/getCitiesByCountry/" + country_id,
                type: "get",
                data: {},
                success: function (msg) {
                    var html = "<option selected disabled value=''>اختر المدينة</option>";
                    var result = JSON.parse(msg);
                    for (var i = 0 in result) {
                        html += "<option value='" + result[i].id + "'>" + result[i].title_ar + "</option>";
                    }
                    console.log(html);
                    $(".city_block").fadeIn(500);
                    $(".cities").html(html);
                }
            });
        });
    };

    var handleChangeCity = function () {
        $(".cities").change(function () {
            var $this = $(this);
            var city_id = $this.val();

            $.ajax({
                url: config.admin_url + "/programs/getHotelsByCity/" + city_id,
                type: "get",
                data: {},
                success: function (msg) {
                    var html = "<option selected disabled value=''>اختر الفندق</option>";
                    var result = JSON.parse(msg);
                    for (var i = 0 in result) {
                        html += "<option value='" + result[i].id + "'>" + result[i].title_ar + "</option>";
                    }
                    $this.closest(".form-group").find(".hotels").html(html);
                }
            });
        });
    };

    var handleSetCountryAndStars = function () {
        var country_id = $("#country_id").val();
        $("select[name='country_id']").val(country_id);
        var country_id = $("#category_id").val();
        $("select[name='category_id']").val(country_id);
        var stars = $("#stars").val();
        $("select[name='stars']").val(stars);
    };

    var handleSetCitiesAndNights = function () {
        var city_ids = $("#city_id").val();
        var cities_object = JSON.parse(city_ids);
        var cities_array = Object.values(cities_object);
        var nights = JSON.parse($("#nights_json").val());
        var nights_array = Object.values(nights);
        var array_length = cities_array.length;
        $("#city_block1").fadeIn(500);
        $("#city_block1 select").val(cities_array[0]);
        $("#city_block1 input").val(nights_array[0]);
        if (array_length > 1) {
            $("#city_block2").fadeIn(500);
            $("#city_block2 select").val(cities_array[1]);
            $("#city_block2 input").val(nights_array[1]);
        }
    };


    var handleServicesChecked = function () {
        var selected_services = JSON.parse($("#selected_services").val());
        var selected_services_array = Object.values(selected_services);
        $(".features").each(function () {
            var $this = $(this);
            var current_value = $this.val();
            if ($.inArray(current_value, selected_services_array) > -1) {
                $this.attr('checked', "checked");
                $this.closest("label").find('.icheckbox_minimal-grey').addClass("checked");
            }
        });
    };

    var handleSlider = function () {
        $("#program_form").on("submit", function () {
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

            var form_type = $("#form_type").val();
            if (form_type == "add") {
                handleCreateValidation();
            } else if (form_type == "slider") {
                handleSlider();
            } else {
                handleEditValidation();
                handleSetCountryAndStars();
                handleSetCitiesAndNights();
                handleServicesChecked();
                handleNights();
            }
            handleChangeCountry();
            handleChangeCity();
        }

    };
}();
jQuery(document).ready(function () {
    FormValidation.init();
});