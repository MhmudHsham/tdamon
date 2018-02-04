@extends('front.layout')
@section('content')
<div class="page-title-container">
    <div class="container">
        <ul class="breadcrumbs pull-right">
            <li><a href="{{ url('/'.$lang.'/') }}">{{ trans("lang.home") }}</a></li>
            <li class="active">{{ trans("lang.hotels") }}</li>
        </ul>
    </div>
</div>
<section id="content">
    <div class="container">
        <div id="main">
            <input type="hidden" id="hotels_count" value="{{ $hotels_count }}" />
            <div class="row">

                <div class="col-sm-12 col-md-12 pull-left">
                    <div class="tour-packages row image-box listing-style2 add-clearfix hotels-block">
                        @foreach($hotels as $one)
                        <div class="col-sms-6 col-sm-4 col-md-3 col-xs-12 pull-left hotel-item">
                            <article class="box animated" data-animation-type="fadeInDown">
                                <figure>
                                    <a href="{{ url('/'.$lang.'/hotels/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                                        <img style="width: 270px;height: 161px;" src="{{ asset($one->image) }}" alt="{{ $one->{$slug->title} }}">
                                    </a>
                                    <figcaption>
                                        <h2 class="caption-title">
                                            <a href="{{ url('/'.$lang.'/hotels/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                                                {{ $one->{$slug->title} }}
                                            </a>
                                        </h2>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        @endforeach


                    </div>
                    <a href="#" class="uppercase full-width button btn-large" style="display: none;" id="show_more_hotels">{{ trans("lang.more") }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('scripts_pages')
{!! HTML::script('front/mine/hotels.js') !!}
@stop