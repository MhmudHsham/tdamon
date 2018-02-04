@extends('front.layout')
@section('content')
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">{{ $details->{$slug->title} }}</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="{{ url('/'.$lang.'/') }}">{{ trans("lang.home") }}</a></li>
            <li><a href="{{ url('/'.$lang.'/destinations') }}">{{ trans("lang.destinations") }}</a></li>
            <li class="active">{{ $details->{$slug->title} }}</li>
        </ul>
    </div>
</div>

<section id="content">
    <div class="container">
        <div class="row">
            <div id="main" class="col-sm-12 col-md-9 col-xs-12 pull-left">
                <div class="post">
                    <div class="flexslider photo-gallery style4 block" data-fix-control-nav-pos="1">
                        <ul class="slides image-box style9">
                            <li>
                                <article class="box">
                                    <figure>
                                        <img src="{{ asset($details->image) }}" alt="{{ $details->{$slug->title} }}">
                                    </figure>

                                </article>
                            </li>

                        </ul>
                    </div>


                    <div class="details">
                        <h1 class="entry-title">{{ $details->{$slug->title} }}</h1>
                        <div class="post-content">
                            <p> {{ $details->{$slug->content} }} </p>

                        </div>

                    </div>

                </div>
            </div>
            <div class="sidebar col-sm-12 col-md-3 col-xs-12 pull-left">
                @if(!$details->sighseeing->isEmpty())
                <div class="travelo-box">
                    <h4>{{ trans("lang.sightseeing") }}</h4>
                    <div class="image-box style14">
                        @foreach($details->sighseeing as $one)
                        <article class="box">
                            <figure >
                                <a href="{{ url('/'.$lang.'/destinations/sightseeing/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                                    <img style="width: 69px;height: 62px;" src="{{ asset($one->image) }}" alt="{{ $one->{$slug->title} }}">
                                </a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title">
                                    <a href="{{ url('/'.$lang.'/destinations/sightseeing/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">{{ $one->{$slug->title} }}</a>
                                </h5>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="travelo-box contact-box">
                    <h4 class="box-title">{{ trans("lang.need_help") }}</h4>
                    <p>{{ mb_substr($settings->{$slug->about_us}, 0, 100) }}</p>
                    <address class="contact-details">
                        <span class="contact-phone"><i class="soap-icon-phone"></i> {{ $settings->site_phone }}
                        </span>
                        <br />
                        <a href="javascript:;" class="contact-email">{{ $settings->site_email }}</a>
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>
@stop