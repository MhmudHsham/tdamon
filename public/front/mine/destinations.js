var Destinations = function () {
    var destinations_count = 0;
    var showMoreDestinations = function () {
        jQuery(document).on("click", "#show_more_destinations", function (e) {
            e.preventDefault();
            var current_length = jQuery(".destination-item").length;
            jQuery.ajax({
                url: config.site_url + "/destinations",
                type: "get",
                data: {offset: current_length},
                beforeSend: function (jqXHR, settings) {
                    setTimeout(function () {
                        jQuery("#show_more_destinations").text(lang.loading);
                    }, 300);
                },
                success: function (data) {
                    console.log(data);
                    setTimeout(function () {
                        jQuery(".destinations-block").append(data);
                    }, 1500);
                },
                error: function (jqXHR, textStatus, errorThrown) {

                },
                complete: function (jqXHR, textStatus) {
                    setTimeout(function () {
                        jQuery("#show_more_destinations").text(lang.load_more);
                        destinations_count = jQuery("#destinations_count").val();
                        current_length = jQuery(".destination-item").length;
                        if (destinations_count <= current_length) {
                            jQuery("#show_more_destinations").hide();
                        }
                    }, 1800);
                }
            });
        });
    };
    var loadShowMoreButton = function () {
        destinations_count = jQuery("#destinations_count").val();
        var current_length = jQuery(".destination-item").length;
        if (destinations_count > current_length) {
            jQuery("#show_more_destinations").show();
        }
    };

    return {
        //main function to initiate the module
        init: function () {
            showMoreDestinations();
            loadShowMoreButton();
        }

    };
}();
jQuery(document).ready(function () {
    Destinations.init();
});