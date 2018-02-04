@extends('front.layout')
@section('content')
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">{{ trans("lang.news") }}</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="{{ url('/'.$lang.'/') }}">{{ trans("lang.home") }}</a></li>
            <li class="active">{{ trans("lang.news") }}</li>
        </ul>
    </div>
</div>

<section id="content">
    <div class="container">
        <div class="row">
            <div id="main" class="col-sm-8 col-md-9 pull-left">
                <div class="page">
                    <input type="hidden" id="news_count" value="{{ $news_count }}" />
                    <div class="post-content">
                        <div class="blog-infinite news-block">

                            @foreach($news as $one)
                            <div class="post col-md-6 news-item">
                                <div class="post-content-wrapper">
                                    <figure class="image-container">
                                        <a href="{{ url('/'.$lang.'/news/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}" class="hover-effect">
                                            <img src="{{ asset($one->image) }}" alt="" />
                                        </a>
                                    </figure>
                                    <div class="details">
                                        <h2 class="entry-title"><a href="{{ url('/'.$lang.'/news/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">{{ $one->{$slug->title} }}</a></h2>
                                        <div class="excerpt-container">
                                            <p> {{  $one->{$slug->content}  }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a href="#" class="uppercase full-width button btn-large" style="display: none;" id="show_more_news">{{ trans("lang.more") }}</a>
                    </div>
                </div>
            </div>




            <div class="sidebar col-sm-12 col-md-3 col-xs-12 pull-left">
                @if(!$other_news->isEmpty())
                <div class="travelo-box">
                    <h4>{{ trans("lang.other_news") }}</h4>
                    <div class="image-box style14">
                        @foreach($other_news as $one)
                        <article class="box">
                            <figure>
                                <a href="{{ url('/'.$lang.'/news/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                                    <img style="width: 63px;height: 59px;" src="{{ asset($one->image) }}" alt=""></a>
                            </figure>
                            <div class="details">
                                <h5 class="box-title"><a href="{{ url('/'.$lang.'/news/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">{{ $one->{$slug->title} }}</a></h5>
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


@section('scripts_pages')
{!! HTML::script('front/mine/news.js') !!}
@stop