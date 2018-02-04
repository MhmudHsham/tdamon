var Programs = function () {
    var programs_count = 0;
    var filter = {};
    var showMorePrograms = function () {
        jQuery(document).on("click", "#show_more_programs", function (e) {
            e.preventDefault();
            var current_length = jQuery(".program-item").length;
            filter['offset'] = current_length;
            var filter_encoded = JSON.stringify(filter);
            jQuery.ajax({
                url: config.site_url + "/programs/handleFilter",
                type: "post",
                data: {filter: filter_encoded},
                headers: {
                    'X-CSRF-TOKEN': tjq('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (jqXHR, settings) {
                    setTimeout(function () {
                        jQuery("#show_more_programs").text(lang.loading);
                    }, 300);
                },
                success: function (data) {
//                    console.log(data);
                    setTimeout(function () {
                        jQuery(".programs-block").append(data);
                    }, 1500);
                },
                error: function (jqXHR, textStatus, errorThrown) {

                },
                complete: function (jqXHR, textStatus) {
                    setTimeout(function () {
                        jQuery("#show_more_programs").text(lang.load_more);
                        programs_count = jQuery("#programs_count").val();
                        current_length = jQuery(".program-item").length;
                        if (programs_count <= current_length) {
                            jQuery("#show_more_programs").hide();
                        }
                    }, 1800);
                }
            });
        });
    };
    var loadShowMoreButton = function () {
        programs_count = jQuery("#programs_count").val();
        var current_length = jQuery(".program-item").length;
        if (programs_count > current_length) {
            jQuery("#show_more_programs").show();
        }
    };
    var handleSliderChange = function () {
        var currenct_sign = localStorage.getItem("currency_sign");
        var max_price = parseInt(tjq("#max_price").val());
        var min_price = parseInt(tjq("#min_price").val());
        var item_object = new Array();
        item_object.push(min_price);
        item_object.push(max_price);
        tjq("#price-range").slider({
            range: true,
            min: min_price,
            max: max_price,
            values: [min_price, max_price],
            slide: function (event, ui) {
                tjq(".min-price-label").html(currenct_sign + " " + ui.values[ 0 ]);
                tjq(".max-price-label").html(currenct_sign + " " + ui.values[ 1 ]);
                item_object[0] = ui.values[ 0 ];
                item_object[1] = ui.values[ 1 ];
                filter["price"] = item_object;
                handleFilter();
            }
        });
        filter["price"] = item_object;
        tjq(".min-price-label").html(currenct_sign + " " + tjq("#price-range").slider("values", 0));
        tjq(".max-price-label").html(currenct_sign + " " + tjq("#price-range").slider("values", 1));
    };

    var handleChangeLinks = function (item) {
        var handle_item = "." + item + "_link";
        jQuery(document).on("click", handle_item, function (e) {
            e.preventDefault();
            // to remove the last item before add it again if checked  :)
            delete filter[item];
            var item_object = new Array();
            jQuery(handle_item).each(function () {
                var $this = jQuery(this);
                if ($this.closest("li").hasClass("active")) {
                    var $this_data = $this.data("id");
                    item_object.push($this_data);
                }
            });
            // check if this current item has data will enter the in the filter object
            if (item_object.length > 0) {
                filter[item] = item_object;
            }
            handleFilter();
        });
    };

    var handleFilter = function () {
        var filter_encoded = JSON.stringify(filter);
        var current_length = jQuery(".program-item").length;
        jQuery.ajax({
            url: config.site_url + "/programs/handleFilter",
            type: "post",
            data: {filter: filter_encoded},
            headers: {
                'X-CSRF-TOKEN': tjq('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function (jqXHR, settings) {
            },
            success: function (data) {
                jQuery(".programs-block").html(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {

            },
            complete: function (jqXHR, textStatus) {
                setTimeout(function () {
                    jQuery("#show_more_programs").text(lang.load_more);
                    programs_count = jQuery("#programs_count").val();
                    current_length = jQuery(".program-item").length;
                    if (programs_count <= current_length) {
                        jQuery("#show_more_programs").hide();
                    }
                }, 1800);
            }
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            showMorePrograms();
            loadShowMoreButton();
            handleSliderChange();
            var data = ["season", "star", "date", "service", "hotel"];
            for (var i in data) {
                handleChangeLinks(data[i]);
            }
        }

    };
}();
jQuery(document).ready(function () {
    Programs.init();
});