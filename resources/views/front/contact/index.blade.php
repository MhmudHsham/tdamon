@extends('front.layout')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">{{ trans("lang.contact_us") }}</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="{{url('/'.$lang.'/') }}">{{ trans("lang.home") }}</a></li>
            <li class="active">{{ trans("lang.contact_us") }}</li>
        </ul>
    </div>
</div>

<section id="content">
    <div class="container">
        <div id="main">
            <div class="travelo-google-map block"></div>
            <div class="contact-address row block">
                <div class="col-md-4 pull-left">
                    <div class="icon-box style5">
                        <i class="soap-icon-phone"></i>
                        <div class="description">
                            <small>{{ trans("lang.contact_us") }}</small>
                            <h5>{{ $settings->site_phone }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  pull-left">
                    <div class="icon-box style5">
                        <i class="soap-icon-message"></i>
                        <div class="description">
                            <small>{{ trans("lang.send_to") }}</small>
                            <h5>{{ $settings->site_email }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pull-left">
                    <div class="icon-box style5">
                        <i class="soap-icon-address"></i>
                        <div class="description">
                            <small>{{ trans("lang.location") }}</small>
                            <h5>{{ $settings->{$slug->site_address} }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="travelo-box box-full">
                <div class="contact-form">
                    <h2>{{ trans("lang.send_us_message") }}</h2>
                    <form action="" method="post" id="contact_form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-sm-4  pull-left">
                                <div class="form-group">
                                    <label>{{ trans("lang.name") }}</label>
                                    <input type="text" name="name" class="input-text full-width required_field">
                                </div>
                                <div class="form-group">
                                    <label>{{ trans("lang.email") }}</label>
                                    <input type="text" name="email" class="input-text full-width required_field">
                                </div>
                                <div class="form-group">
                                    <label>{{ trans("lang.subject") }}</label>
                                    <input type="text" name="subject" class="input-text full-width required_field">
                                </div>
                            </div>
                            <div class="col-sm-8  pull-left">
                                <div class="form-group">
                                    <label>{{ trans("lang.message") }}</label>
                                    <textarea name="message" rows="8" class="input-text full-width required_field" placeholder="{{ trans("lang.type_the_message_here") }}"></textarea>
                                </div>
                            </div>
                            <div class="col-sms-offset-6 col-sm-8">
                                <button type="submit" class="btn-medium full-width">{{ trans("lang.send") }}</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('scripts_pages')
{!! HTML::script('http://maps.google.com/maps/api/js?sensor=false&amp;language=en') !!}
{!! HTML::script('front/js/gmap3.min.js') !!}

<script type="text/javascript">
    tjq(".travelo-google-map").gmap3({
        map: {
            options: {
                center: [30.075667, 31.305005],
                zoom: 16
            }
        },
        marker: {
            values: [
                {latLng: [30.075667, 31.305005], data: "Egypt"}
            ],
            options: {
                draggable: false
            },
        }
    });
</script>
{!! HTML::script('front/mine/contact.js') !!}


@stop