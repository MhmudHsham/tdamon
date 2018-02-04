<!--
<div id="live-chat">

    <header class="clearfix">

        <a href="#" class="chat-close">x</a>

        <h4>Sales Chat</h4>

        <span class="chat-message-counter pulse" style="display: block">3</span>

    </header>

    <div class="chat" style="display: none">

        <div class="chat-history">

            <div class="chat-message clearfix">

                <img src="{{asset('front/images/user.png') }}" alt="" width="32" height="32">

                <div class="chat-message-content clearfix">

                    <span class="chat-time">13:35</span>

                    <h5>Employee</h5>

                    <p>Welcome, how can I help you</p>

                </div>  end chat-message-content

            </div>  end chat-message

            <hr>

            <div class="chat-message clearfix clint_user">

                <img src="{{asset('front/images/user.png') }}" alt="" width="32" height="32">

                <div class="chat-message-content clearfix">

                    <span class="chat-time">13:37</span>

                    <h5>Customer</h5>

                    <p>I want to know how to book Umrah from your site</p>

                </div>  end chat-message-content

            </div>  end chat-message

            <hr>

            <div class="chat-message clearfix">

                <img src="{{asset('front/images/user.png') }}" alt="" width="32" height="32">

                <div class="chat-message-content clearfix">

                    <span class="chat-time">13:38</span>

                    <h5>Employee</h5>

                    <p>Very simple, I appreciate your presence. You can choose Umrah program now and I am with your presence step by step</p>

                </div>  end chat-message-content

            </div>  end chat-message

            <hr>

        </div>  end chat-history

        <hr>
        <p class="chat-feedback">writing a message now</p>

        <form action="#" method="post">

            <fieldset>

                <input type="text" placeholder="Type your message…" autofocus>

                                <a href="#" class="chatbtn">Send</a>
                <input class="chatbtn" type="button" value="Send"  onclick="play()">
                <audio id="audio" src="{{asset('front/message.mp3') }}" ></audio>

            </fieldset>

        </form>

    </div>  end chat

</div>  end live-chat
-->

<footer id="footer">
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3  pull-left">
                    <h2>{{ trans("lang.about_us") }}</h2>
                    <p> {{ $settings->{$slug->about_us} }}</p>
                    <br />
                    <address class="contact-details">
                        <span class="contact-phone"><i class="soap-icon-phone"></i>{{ $settings->site_phone }}</span>
                        <br />
                        <a href="javascript:;" class="contact-email">{{ $settings->site_email }}</a>
                    </address>
                    <ul class="social-icons clearfix">
                        @if($settings->site_twitter != "")
                        <li class="twitter">
                            <a title="twitter" href="{{ $settings->site_twitter }}" target="_blank" data-toggle="tooltip">
                                <i class="soap-icon-twitter"></i>
                            </a>
                        </li>
                        @endif
                        @if($settings->site_gplus != "")
                        <li class="googleplus">
                            <a title="googleplus" href="{{ $settings->site_gplus }}" target="_blank"  data-toggle="tooltip">
                                <i class="soap-icon-googleplus"></i>
                            </a>
                        </li>
                        @endif
                        @if($settings->site_facebook != "")
                        <li class="facebook">
                            <a title="facebook" href="{{ $settings->site_facebook }}" target="_blank"  data-toggle="tooltip">
                                <i class="soap-icon-facebook"></i>
                            </a>
                        </li>
                        @endif
                        @if($settings->site_linkedin != "")
                        <li class="linkedin">
                            <a title="linkedin" href="{{ $settings->site_linkedin }}" target="_blank"  data-toggle="tooltip">
                                <i class="soap-icon-linkedin"></i>
                            </a>
                        </li>
                        @endif
                        @if($settings->site_instagram != "")
                        <li class="instagram">
                            <a title="instagram" href="{{ $settings->site_instagram }}"  target="_blank" data-toggle="tooltip">
                                <i class="soap-icon-instagram"></i>
                            </a>
                        </li>
                        @endif
                        @if($settings->site_youtube != "")
                        <li class="youtube ">
                            <a title="youtube " href="{{ $settings->site_youtube }}" target="_blank"  data-toggle="tooltip">
                                <i class="soap-icon-youtube"></i>
                            </a>
                        </li>
                        @endif

                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 pull-left">
                    <h2>{{ trans("lang.important_links") }}</h2>
                    <ul class="discover triangle hover row">
                        <li class="active col-xs-6 pull-left"><a href="{{ url('/'.$lang.'/') }}">{{ trans("lang.home") }}</a></li>
                        <li class="col-xs-6 pull-left"><a href="{{ url('/'.$lang.'/sightseeing') }}">{{ trans("lang.sightseeing") }}</a></li>
                        <li class="col-xs-6 pull-left"><a href="{{ url('/'.$lang.'/services') }}">{{ trans("lang.services") }}</a></li>
                        <li class="col-xs-6 pull-left"><a href="{{ url('/'.$lang.'/partners') }}">{{ trans("lang.partners") }}</a></li>
                        <li class="col-xs-6 pull-left"><a href="{{ url('/'.$lang.'/news') }}">{{ trans("lang.news") }}</a></li>
                        <li class="col-xs-6 pull-left"><a href="{{ url('/'.$lang.'/make_your_umrah') }}">{{ trans("lang.make_your_umrah") }}</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3  pull-left">
                    <h2>{{ trans("lang.latest_news") }}</h2>
                    <ul class="travel-news">
                        @foreach($latest_news as $one)
                        <li>
                            <div class="thumb">
                                <a href="{{ url('/'.$lang.'/news/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                                    <img src="{{asset($one->image) }}" alt="{{ $one->{$slug->title} }}" width="63" height="63" />
                                </a>
                            </div>
                            <div class="description">
                                <h5 class="s-title">
                                    <a href="{{ url('/'.$lang.'/news/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">{{ $one->{$slug->title} }}</a>
                                </h5>
                                <p>{{ mb_substr($one->{$slug->content}, 0, 50) }} </p>
                                <span class="date">{{ Carbon\Carbon::parse($one->created_at)->format('d M') }}, {{ Carbon\Carbon::parse($one->created_at)->format('Y') }}</span>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-sm-6 col-md-3  pull-left">
                    <h2>{{ trans("lang.newsletter") }}</h2>
                    <p>{{ trans("lang.Subscribe_with_us_and_get_all_new_e-mail") }}</p>
                    <br />
                    <div class="icon-check">
                        <input type="text" class="input-text full-width" placeholder="{{ trans("lang.email") }}" />
                    </div>
                    <br />
                    <div class="col-md-12 text-center">
                        <img src="{{asset('front/images/b_47_225.gif') }}" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bottom gray-area">
        <div class="container">
            <div class="">
                <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
            </div>
            <div class="copyright text-center">
                <p>All Rights Reserved ©.2017 | <a target="_blank" href="http://www.mv-is.com/">Powered By MASTER VISION Integrated Solutions </a></p>
            </div>
        </div>
    </div>
</footer>



<!-- Javascript -->
{!! HTML::script('front/js/jquery-1.11.1.min.js') !!}

{!! HTML::script('front/js/jquery.noconflict.js') !!}
{!! HTML::script('front/js/modernizr.2.7.1.min.js') !!}
{!! HTML::script('front/js/jquery-migrate-1.2.1.min.js') !!}
{!! HTML::script('front/js/jquery.placeholder.js') !!}
{!! HTML::script('front/js/jquery-ui.1.10.4.min.js') !!}

<!-- Twitter Bootstrap -->
{!! HTML::script('front/js/bootstrap.min.js') !!}

<!-- load revolution slider scripts -->
{!! HTML::script('front/js/revolution_slider/js/jquery.themepunch.tools.min.js') !!}
{!! HTML::script('front/js/revolution_slider/js/jquery.themepunch.revolution.min.js') !!}

<!-- load BXSlider scripts -->
{!! HTML::script('front/js/jquery.bxslider/jquery.bxslider.min.js') !!}

<!-- Flex Slider -->
{!! HTML::script('front/js/flexslider/jquery.flexslider-min.js') !!}

<!-- parallax -->
{!! HTML::script('front/js/jquery.stellar.min.js') !!}

<!-- waypoint -->
{!! HTML::script('front/js/waypoints.min.js') !!}
{!! HTML::script('front/js/jquery.fancybox.js') !!}


{!! HTML::script('front/js/owl.carousel.min.js') !!}


@yield('scripts_pages')


<!-- load page Javascript -->
{!! HTML::script('front/js/theme-scripts.js') !!}
{!! HTML::script('front/js/scripts.js') !!}

<script type="text/javascript">
    tjq(document).ready(function () {
        tjq('.revolution-slider').revolution(
                {
                    sliderType: "standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 10000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style: "default",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1170,
                    gridheight: 646,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner4",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
    });
</script>

<script type="text/javascript">
   tjq(document).ready(function () {
            tjq('.hotels-logo-carousel').owlCarousel({
                // loop:true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                margin: 20,
                nav: true,
                rewind: true,
                smartSpeed: 1200,
                autoplayTimeout: 3000,
                dots:true,
                rtl:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    480:{
                        items:1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }
            });
    });
</script>
<script>
    function play() {
        var audio = document.getElementById("audio");
        audio.play();
    }
</script>
<script>
    tjq(document).ready(function () {
        tjq(".galleryimg").fancybox({
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            type: 'image',
            'allowfullscreen': true,

        });
    });
</script>
<input type="hidden" id="utl" value="{{ url('/') }}" />
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<script type="text/javascript">
    tjq(document).ready(function () {
        var utl = tjq("#utl").val();
        tjq("#search_agent_button").click(function (e) {
            e.preventDefault();
            var current_country = tjq("#agent_country").val();
            tjq.ajax({
                url: "{{ url('/search_agent/') }}" + "/" + current_country,
                type: "get",
                data: {},
                success: function (msg) {
                    console.log(msg);
                    var html = "";
                    var result = JSON.parse(msg);
                    for (var i in result) {
                        html += '<div class="col-md-3 col-xs-6 wkyle">'
                                + '<a href="' + result[i].url + '" target="_blank">'
                                + '<img style="height: 58px;width: 153px;" src="' + utl + '/' + result[i].image + '" alt="' + result[i].title_en + '"  title="' + result[i].title_en + '">'
                                + '</a>'
                                + '</div>';
                    }
                    tjq("#agents_block").html(html);
                }
            });
        });


        tjq(".nav_currency").click(function (e) {
            e.preventDefault();
            var id = tjq(this).data("id");
            var price = tjq(this).data("price");
            var sign = tjq(this).data("sign");
            tjq.ajax({
                url: config.base_url + "/change_currency/" + id + "/" + price + "/" + sign,
                type: "get",
                data: {},
                success: function (msg) {
                    localStorage.setItem("currency_id", id);
                    localStorage.setItem("currency_price", price);
                    localStorage.setItem("currency_sign", sign);
                    tjq("#currency_" + id).css("color", "#6d1401");
                    location.reload();
                }
            });
        });
    });
</script>

<script>
    tjq(document).ready(function () {

        var currency_stored = localStorage.getItem("currency_id");
        if (currency_stored == null) {
            var currency_id = tjq(".nav_currency:first").data("id");
            var currency_price = tjq(".nav_currency:first").data("price");
            var currency_sign = tjq(".nav_currency:first").data("sign");
            tjq.ajax({
                url: config.base_url + "/change_currency/" + currency_id + "/" + currency_price,
                type: "get",
                data: {},
                success: function (msg) {
                    localStorage.setItem("currency_id", currency_id);
                    localStorage.setItem("currency_price", currency_price);
                    localStorage.setItem("currency_sign", currency_sign);
                    location.reload();
                }
            });
        }
        tjq("#currency_" + currency_stored).css("color", "#6d1401");
    });
</script>


@yield("libraries_scripts")