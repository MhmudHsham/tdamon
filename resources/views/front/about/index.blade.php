@extends('front.layout')

@section('content')
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">{{ trans("lang.abou_us") }}</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="{{ url('/'.$lang.'/') }}">{{ trans("lang.home") }}</a></li>
            <li class="active">{{ trans("lang.about_us") }}</li>
        </ul>
    </div>
</div>

<section id="content">
    <div class="container">
        <div id="main">
            <div class="large-block image-box style6">
                <article class="box">
                    <figure class="col-md-5 pull-left ">
                        <iframe width="100%" height="280" src="https://www.youtube.com/embed/{{ $settings->site_video }}" frameborder="0" allowfullscreen></iframe>
                    </figure>
                    <div class="details col-md-7 pull-left">
                        <h4 class="box-title">{{ trans("lang.who_we_are") }}</h4>
                        <p> {{ $settings->{$slug->about_us} }} </p>

                    </div>
                </article>
                <article class="box">
                    <figure class="col-md-5 pull-right middle-block">
                        <a href="javascript:;" title="">
                            <img class="middle-item" src="{{ url('/') }}/front/images/shortcodes/image-box/style06/2.png" alt="" width="476" height="318" />
                        </a>
                    </figure>
                    <div class="details col-md-7 pull-left">
                        <h4 class="box-title">{{ trans("lang.vision") }}</h4>
                        <p>{{ $settings->{$slug->vision} }}</p>
                    </div>
                </article>
                <article class="box">
                    <figure class="col-md-5 pull-left">
                        <a href="javascript:;" title="" class="middle-block"><img class="middle-item" src="{{ url('/') }}/front/images/shortcodes/image-box/style06/3.png" alt="" width="476" height="318" /></a>
                    </figure>
                    <div class="details col-md-7 pull-left">
                        <h4 class="box-title">{{ trans("lang.mission") }}</h4>
                        <p>{{ $settings->{$slug->mission} }}</p>
                    </div>
                </article>
                <article class="box">
                    <figure class="col-md-5 pull-right middle-block">
                        <a href="javascript:;" title="">
                            <img class="middle-item" src="{{ url('/') }}/front/images/shortcodes/image-box/style06/1.png" alt="" width="476" height="318" /></a>
                    </figure>
                    <div class="details col-md-7 pull-left">
                        <h4 class="box-title">{{ trans("lang.why_us") }}</h4>
                        <p>{{ $settings->{$slug->why_us} }}</p>
                    </div>
                </article>
            </div>


        </div>
    </div>
</section>

@stop