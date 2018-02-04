var Hotels_booking = function () {

    var flag = true;
    var sendRequest = function () {
        var form = $("#book_hotel_form");
        form.submit(function (e) {
            e.preventDefault();
            flag = true;
            validateForm();
            if (flag) {
                var $form = form.serialize();
                $.ajax({
                    url: config.base_url + "/hotels/book_now",
                    type: "post",
                    data: $form,
                    success: function (msg) {
//                        console.log(msg);
                        if (msg == 1) {
                            $("#submit_btn").html(lang.complete_request);
                            $("#submit_btn").attr("disabled", "disabled");
                        }
                    }
                });
            }
        });
    };
    var validateForm = function () {
        $(".required_field").each(function () {
            var $this = $(this);
            if ($this.val() == "") {
                flag = false;
                $this.css("border", "1px solid #ff1717");
                $this.closest(".form-group").find("label").css("color", "#ff1717");
                $this.closest('.form-group').find(".input-group-addon").css("color", "#ff1717");
                setTimeout(function () {
                    $this.css("border", "");
                    $this.closest(".form-group").find("label").css("color", "");
                    $this.closest('.form-group').find(".input-group-addon").css("color", "");
                }, 2000);
            }
        });
    };
    var loadMoreRooms = function () {
        $(document).on("click", "#add_more", function (e) {
            e.preventDefault();
            $.ajax({
                url: config.base_url + "/home/get_more_make",
                type: "get",
                data: {lang: config.current_lang},
                success: function (msg) {
                    var html = "";
                    var rooms = JSON.parse(msg);
                    console.log(rooms);
                    html += '<div class="remove_row"><div class="col-sm-12 col-md-2 col-lg-2 col-xs-12  form-group pull-left">'
                    html += '<label class="control-label">' + lang.room_type + '</label>';
                    html += '<div class="selector"><select name="room_type[]" class="full-width required_field">';
                    for (var i in rooms) {
                        html += '<option value="' + i + '">' + rooms[i] + '</option>';
                    }
                    var first_element = rooms[Object.keys(rooms)[0]]; //returns first element in array
                    html += '</select><span class="custom-select full-width">' + first_element + '</span></div></div>';
                    html += '<div class="col-sm-2 form-group pull-left">';
                    html += '<label class="control-label">' + lang.number_of_rooms + '</label>';
                    html += '<input type="number" name="number_of_rooms[]" class="input-text full-width"></div>';
                    html += '<div class="col-sm-2 form-group pull-left">';
                    html += '<label class="control-label">' + lang.number_of_adults + '</label>';
                    html += '<input type="number" name="adults[]" class="input-text full-width"></div>';
                    html += '<div class="col-sm-2 form-group pull-left">';
                    html += '<label class="control-label">' + lang.number_of_children + '</label>';
                    html += '<input type="number" value="0"  name="children[]" class="input-text full-width">';
                    html += '</div><div class="col-sm-2 form-group pull-left">';
                    html += '<label class="control-label">' + lang.number_of_infants + '</label>';
                    html += '<input type="number" value="0" name="infants[]" class="input-text full-width">';
                    html += '</div><div class="col-sm-1 form-group pull-left">';
                    html += '<label class="control-label"></label>';
                    html += '<a href="" class="btn btn-danger remove"  >' + lang.remove + '</a>';
                    html += '</div></div>';
                    $(".rooms_block").append(html);
                }
            });
        });
    };
    var removeRow = function () {
        $(document).on("click", ".remove", function (e) {
            e.preventDefault();
            $(this).closest('.remove_row').remove();
            flag = true;
        });
    };
    return {
        init: function () {
            sendRequest();
            loadMoreRooms();
            removeRow();
        }
    };
}();
jQuery(document).ready(function () {
    Hotels_booking.init();
});