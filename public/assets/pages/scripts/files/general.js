var Apply = function () {
    var applyDelete = function () {

        $(".delete_link").click(function (e) {
            e.preventDefault();
            var href = $(this).attr("href");
            var id = $(this).attr("data-id");
            $.ajax({
                url: href,
                type: "get",
                data: {},
                success: function (msg) {
                    console.log(msg);
                    var result = JSON.parse(msg);
                    if (result.type == "success") {
                        setTimeout(function () {
                            $(".tr_" + id).fadeOut();
                        }, 1000);
                        toastr.success(result.message);
                    } else {
                        toastr.error(result.message);
                    }
                }
            });
        });
    };
    return {
        //main function to initiate the module
        init: function () {
            applyDelete();
        }

    };
}();
jQuery(document).ready(function () {
    Apply.init();
});
