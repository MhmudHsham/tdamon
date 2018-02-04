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
            <li><a href="{{ url('/'.$lang.'/destinations/details/'.$details->city->id.'/'.str_replace(' ', '-', $details->city->{$slug->title})) }}">{{ $details->city->{$slug->title} }}</a></li>
            <li class="active">{{ $details->{$slug->title} }}</li>
        </ul>
    </div>
</div>

<section id="content">
    <div class="container">
        <div class="row">
            <div id="main" class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xs-12">
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

        </div>
    </div>
</section>
@stop