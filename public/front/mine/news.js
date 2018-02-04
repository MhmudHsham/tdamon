var News = function () {
    var news_count = 0;
    var showMoreNews = function () {
        jQuery(document).on("click", "#show_more_news", function (e) {
            e.preventDefault();
            var current_length = jQuery(".news-item").length;
            jQuery.ajax({
                url: config.site_url + "/news",
                type: "get",
                data: {offset: current_length},
                beforeSend: function (jqXHR, settings) {
                    setTimeout(function () {
                        jQuery("#show_more_news").text(lang.loading);
                    }, 300);
                },
                success: function (data) {
                    console.log(data);
                    setTimeout(function () {
                        jQuery(".news-block").append(data);
                    }, 1500);
                },
                error: function (jqXHR, textStatus, errorThrown) {

                },
                complete: function (jqXHR, textStatus) {
                    setTimeout(function () {
                        jQuery("#show_more_news").text(lang.load_more);
                        news_count = jQuery("#news_count").val();
                        current_length = jQuery(".news-item").length;
                        if (news_count <= current_length) {
                            jQuery("#show_more_news").hide();
                        }
                    }, 1800);
                }
            });
        });
    };
    var loadShowMoreButton = function () {
        news_count = jQuery("#news_count").val();
        var current_length = jQuery(".news-item").length;
        if (news_count > current_length) {
            jQuery("#show_more_news").show();
        }
    };

    return {
        //main function to initiate the module
        init: function () {
            showMoreNews();
            loadShowMoreButton();
        }

    };
}();
jQuery(document).ready(function () {
    News.init();
});