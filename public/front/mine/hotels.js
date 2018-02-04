var Hotels = function () {
    var hotels_count = 0;
    var showMoreHotels = function () {
        jQuery(document).on("click", "#show_more_hotels", function (e) {
            e.preventDefault();
            var current_length = jQuery(".hotel-item").length;
            jQuery.ajax({
                url: config.site_url + "/hotels",
                type: "get",
                data: {offset: current_length},
                beforeSend: function (jqXHR, settings) {
                    setTimeout(function () {
                        jQuery("#show_more_hotels").text(lang.loading);
                    }, 300);
                },
                success: function (data) {
                    console.log(data);
                    setTimeout(function () {
                        jQuery(".hotels-block").append(data);
                    }, 1500);
                },
                error: function (jqXHR, textStatus, errorThrown) {

                },
                complete: function (jqXHR, textStatus) {
                    setTimeout(function () {
                        jQuery("#show_more_hotels").text(lang.load_more);
                        hotels_count = jQuery("#hotels_count").val();
                        current_length = jQuery(".hotel-item").length;
                        if (hotels_count <= current_length) {
                            jQuery("#show_more_hotels").hide();
                        }
                    }, 1800);
                }
            });
        });
    };
    var loadShowMoreButton = function () {
        hotels_count = jQuery("#hotels_count").val();
        var current_length = jQuery(".hotel-item").length;
        if (hotels_count > current_length) {
            jQuery("#show_more_hotels").show();
        }
    };

    return {
        //main function to initiate the module
        init: function () {
            showMoreHotels();
            loadShowMoreButton();
        }

    };
}();
jQuery(document).ready(function () {
    Hotels.init();
});