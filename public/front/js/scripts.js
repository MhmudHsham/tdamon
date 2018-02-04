

    tjq(document).ready(function () {


        // UI Form Element

        tjq('#live-chat header').on('click', function () {

            tjq('.chat').slideToggle(300, 'swing');
            tjq('.chat-message-counter').fadeToggle(300, 'swing');

        });

        tjq('.chat-close').on('click', function (e) {

            e.preventDefault();
            tjq('#live-chat').fadeOut(300);

        });



        if (tjq('.add_more_prices').length > 0) {
            tjq('.add_more_prices').on('click', function () {
                var $html = tjq('.booking_list_hide').html();
                tjq('.user_booking_data .booking_list').last().after($html);
                tjq('.remove_this_prices').off('click');
                tjq('.remove_this_prices').on('click', function () {
                    var $index = tjq('.remove_this_prices').index(this);
                    tjq('.remove_this_prices').eq($index).parent().parent().remove();
                });
            });

            tjq('.remove_this_prices').on('click', function () {
                var $index = tjq('.remove_this_prices').index(this);
                tjq('.remove_this_prices').eq($index).parent().parent().remove();
            });
        }

    });
