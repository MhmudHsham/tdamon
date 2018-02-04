var Make_your_umrah = function () {

    var flag = true;

    var sendRequest = function () {
        var form = $("#make_your_umrah_form");
        form.submit(function (e) {
            e.preventDefault();
            flag = true;
            validateForm();
            if (flag) {
                var $form = form.serialize();
                $.ajax({
                    url: config.base_url + "/home/send_make_your_umrah",
                    type: "post",
                    data: $form,
                    success: function (msg) {
                        if (msg == 1) {
                            $("#submit_btn").val(lang.complete_request);
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
                    html += '<div class="remove_row"><div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "><div class="form-group">';
                    html += '<label>' + lang.rooms + '</label><select name="rooms[]" class="form-control rooms required_field">';
                    html += '<option value="">' + lang.select_room + '</option>';
                    for (var i in rooms) {
                        html += '<option value="' + i + '">' + rooms[i] + '</option>';
                    }
                    html += '</select></div></div>';
                    html += '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">'
                            + '<div class="form-group">'
                            + '<label>' + lang.number_of_rooms + '</label>'
                            + '<div class="input-group">'
                            + '<input type="text" name="number_of_rooms[]" class="form-control required_field" placeholder="' + lang.number_of_rooms + '">'
                            + '</div></div></div>'
                            + '<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">'
                            + '<div class="form-group"><label>' + lang.number_of_adults + '</label><div class="input-group">'
                            + '<input type="text"  name="number_of_adults[]" class="form-control required_field" placeholder="' + lang.number_of_adults + '">'
                            + '</div></div></div><div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">'
                            + '<div class="form-group"><label>' + lang.number_of_children + '</label><div class="input-group">'
                            + '<input type="text" value="0" name="number_of_children[]" class="form-control" placeholder="' + lang.number_of_children + '">'
                            + '</div></div></div><div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">'
                            + '<div class="form-group"><label>' + lang.number_of_infants + '</label><div class="input-group">'
                            + '<input type="text" value="0" name="number_of_infants[]" class="form-control" placeholder="' + lang.number_of_infants + '">'
                            + '</div></div></div><div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">'
                            + '<div class="form-group"><label></label><div class="input-group">'
                            + '<a href="" class="btn btn-danger remove"  >' + lang.remove + '</a></div></div></div></div>';
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
    Make_your_umrah.init();
});