<!-- Page Title -->
<title>{{ $settings->{$slug->site_title} }}</title>
<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Travelo - Travel, Tour Booking HTML5 Template">
<meta name="author" content="SoapTheme">
@yield('head')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{asset($settings->site_logo)}}" type="image/x-icon">
<!-- Theme Styles -->
{!! HTML::style('front/css/bootstrap.min.css') !!}
{!! HTML::style('front/css/font-awesome.min.css') !!}
{!! HTML::style('http://fonts.googleapis.com/css?family=Lato:300,400,700') !!}
{!! HTML::style('front/css/animate.min.css') !!}
{!! HTML::style('front/css/style.css') !!}
{!! HTML::style('front/css/color.css') !!}

<!-- Current Page Styles -->
{!! HTML::style('front/js/revolution_slider/css/settings.css') !!}
{!! HTML::style('front/js/revolution_slider/css/style.css') !!}
{!! HTML::style('front/js/jquery.bxslider/jquery.bxslider.css') !!}
{!! HTML::style('front/js/flexslider/flexslider.css') !!}
{!! HTML::style('front/css/jquery.fancybox.css') !!}
{!! HTML::style('front/css/jquery.fancybox-thumbs.css') !!}
{!! HTML::script('front/css/owl.carousel.css') !!}
<!-- Main Style -->
<!--<link id="main-style" rel="stylesheet" href="css/style.css">-->
<!-- Updated Styles -->
{!! HTML::style('front/css/updates.css') !!}
<!-- Custom Styles -->
@if(LaravelLocalization::getCurrentLocale() == "en")
{!! HTML::style('front/css/custom_en.css') !!}
@else
{!! HTML::style('front/css/custom_ar.css') !!}
@endif
<!-- Responsive Styles -->
{!! HTML::style('front/css/responsive.css') !!}

<!-- CSS for IE -->
<!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->

<!-- Javascript Page Loader -->
{!! HTML::script('front/js/pace.min.js') !!}

<!--<script type="text/javascript" src="" data-pace-options='{ "ajax": false }'></script>-->

<script type="text/javascript">
    var config = {
        current_lang: "{{ $lang }}",
        site_url: "{{ url('/'.$lang) }}",
        base_url: "{{ url('/') }}",
        site_title: "{{ $settings->{$slug->site_title} }}",
        site_logo: "{{asset($settings->site_logo)}}",
    };
    var lang = {
        loading: "{{ trans('lang.loading') }}",
        load_more: "{{ trans('lang.more') }}",
        complete_request: "{{ trans('lang.complete_request') }}",
        rooms: "{{ trans('lang.rooms') }}",
        number_of_rooms: "{{ trans('lang.number_of_rooms') }}",
        number_of_adults: "{{ trans('lang.number_of_adults') }}",
        number_of_children: "{{ trans('lang.number_of_children') }}",
        number_of_infants: "{{ trans('lang.number_of_infants') }}",
        remove: "{{ trans('lang.remove') }}",
        select_room: "{{ trans('lang.select_room') }}",
        room_type: "{{ trans('lang.room_type') }}",
    };
</script>

{!! HTML::script('front/js/page-loading.js') !!}

