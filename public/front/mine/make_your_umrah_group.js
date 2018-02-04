var Make_your_umrah = function () {

    var sendRequest = function () {
        var form = $("#make_your_umrah_form");
        form.submit(function (e) {
            e.preventDefault();
            var $form = form.serialize();
            $.ajax({
                url: config.base_url + "/home/make_your_umrah_group",
                type: "post",
                data: $form,
                success: function (msg) {
                    if (msg == 1) {
                        $("#submit_btn").val(lang.complete_request);
                        $("#submit_btn").attr("disabled", "disabled");
                    }
                }
            });
        });
    };


    var loadMoreRooms = function () {
        $(document).on("click", "#add_more", function (e) {
            e.preventDefault();
        });
    };

    return {
        init: function () {
            sendRequest();
            loadMoreRooms();
        }
    };

}();

jQuery(document).ready(function () {
    Make_your_umrah.init();
});