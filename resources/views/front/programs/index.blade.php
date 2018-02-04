@extends('front.layout')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">{{ trans("lang.programs") }}</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="{{ url('/'.$lang.'/') }}">{{ trans("lang.home") }}</a></li>
            <li class="active">{{ trans("lang.programs") }}</li>
        </ul>
    </div>
</div>
<section id="content">
    <div class="container">
        <div id="main">
            <input type="hidden" id="programs_count" value="{{ $programs_count }}" />
            <input type="hidden" id="min_price" value="{{ $minPrice }}" />
            <input type="hidden" id="max_price" value="{{ $maxPrice }}" />
            <div class="row">
                <div class="col-sm-4 col-md-3 pull-left">
                    <h4 class="search-results-title">{{ trans("lang.filter") }}</h4>
                    <div class="toggle-container filters-container">
                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#price-filter" class="collapsed" aria-expanded="true">{{ trans("lang.price") }}</a>
                            </h4>
                            <div id="price-filter" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="panel-content">
                                    <div id="price-range"></div>
                                    <br />
                                    <span class="min-price-label pull-left"></span>
                                    <span class="max-price-label pull-right"></span>
                                    <div class="clearer"></div>
                                </div><!-- end content -->
                            </div>
                        </div>

                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#language-filter" class="collapsed" aria-expanded="true">{{ trans("lang.season") }}</a>
                            </h4>
                            <div id="language-filter" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="panel-content">
                                    <ul class="check-square filters-option">
                                        @foreach($categories as $one)
                                        <li>
                                            <a href="#" data-id="{{ $one->id }}" class="season_link">
                                                {{ $one->{$slug->title} }}
                                                <small>
                                                    {{ $one->programs_count }}
                                                </small>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#accomodation-type-filter" class="collapsed">{{ trans("lang.stars") }}</a>
                            </h4>
                            <div id="accomodation-type-filter" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <ul class="check-square filters-option">
                                        <li>
                                            <a href="#" class="star_link" data-id="5">5 {{ trans("lang.stars") }}
                                                <small>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="star_link" data-id="4">4 {{ trans("lang.stars") }}
                                                <small>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="star_link" data-id="3">3 {{ trans("lang.stars") }}
                                                <small>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </small>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="star_link" data-id="2"> {{ trans("lang.two_stars") }}
                                                <small>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="star_link" data-id="1"> {{ trans("lang.one_star") }}
                                                <small>
                                                    <i class="fa fa-star"></i>
                                                </small>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#hotels-filter" class="collapsed">{{ trans("lang.hotels") }}</a>
                            </h4>
                            <div id="hotels-filter" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <ul class="check-square filters-option">
                                        @foreach($hotels as $one)
                                        <li>
                                            <a href="#" class="hotel_link" data-id="{{ $one->id }}">
                                                {{ $one->{$slug->title} }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>


                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#amenities-filter" class="collapsed">{{ trans("lang.services") }}</a>
                            </h4>
                            <div id="amenities-filter" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <ul class="check-square filters-option">
                                        @foreach($services as $one)
                                        <li>
                                            <a href="#" class="service_link" data-id="{{ $one->id }}">
                                                {{ $one->{$slug->title} }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>


                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#dates-filter" class="collapsed">{{ trans("lang.dates") }}</a>
                            </h4>
                            <div id="dates-filter" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <ul class="check-square filters-option">
                                        @foreach($new_dates_array as $one)
                                        <li>
                                            <a href="#" class="date_link" data-id="{{ $one->start_date }}">
                                                {{ $one->start_date }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="col-sm-8 col-md-9 pull-left">
                    <div class="hotel-list">
                        <div class="row image-box hotel listing-style1 programs-block">
                            @foreach($programs as $one)
                            <div class="col-sm-6 col-md-4 pull-left program-item">
                                <article class="box">
                                    <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
                                        <a class="hover-effect" href="{{ url('/'.$lang.'/programs/details/'.$one->id."/".str_replace(' ', '-', $one->{$slug->title})) }}" title="{{ $one->{$slug->title} }}">
                                            <img style="width:270px;height:161px;" src="{{ asset($one->image) }}" alt="{{ $one->{$slug->title} }}">
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h4 class="box-title">{{ $one->{$slug->title} }}</h4>
                                        <div class="feedback">
                                            <span class="price">
                                                @php($money = $one->dates[0]->price)
                                                @php($currency_price = $one->dates[0]->currency->price)
                                                {{ view("front.currency.convert", compact('money', 'currency_price')) }}
                                            </span>
                                            <div title="{{ $one->stars }} {{ trans("lang.stars") }}" class="five-stars-container" data-toggle="tooltip" data-placement="bottom">
                                                @for($i = 0; $i < $one->stars; $i++)
                                                <span class="five-stars" style=""></span>
                                                @endfor
                                            </div>
                                        </div>
                                        <p class="description"> {{ mb_substr($one->{$slug->content}, 0, 100) }} <a href="{{ url('/'.$lang.'/programs/details/'.$one->id."/".str_replace(' ', '-', $one->{$slug->title})) }}">[ ... ]</a></p>
                                        <div class="action">
                                            <a href="{{ url('/'.$lang.'/programs/details/'.$one->id."/".str_replace(' ', '-', $one->{$slug->title})) }}" class="button btn-small">{{ trans("lang.more") }}</a>
                                            <a href="{{ url('/'.$lang.'/programs/details/'.$one->id."/".str_replace(' ', '-', $one->{$slug->title})) }}" class="button btn-small yellow">{{ trans("lang.book") }}</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="#" class="uppercase full-width button btn-large" style="display: none;" id="show_more_programs">{{ trans("lang.more") }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('scripts_pages')
{!! HTML::script('front/mine/programs.js') !!}
@stop