@extends('front.layout')
@section('content')
<div id="slideshow" class="ltr">
    <div class="fullwidthbanner-container">
        <div class="revolution-slider rev_slider" style="height: 0; overflow: hidden;">
            <ul>

                @foreach($sliders as $key => $one)
                @if($key % 2 == 0)
                <li data-index="rs-{{ $key }}" data-transition="cube" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="800"  data-thumb="{{asset('front/uploads/revslider1/snapshot/bg1.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset(str_replace('images/sliders/', 'images/sliders/thumb/l_', $one->image)) }}"  alt="" title="Slider1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large_bold_white_med   tp-resizeme slidetxt"
                         id="slide-21-layer-1"
                         data-x="center"
                         data-y="261"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 99999;">
                        {{ $one->{$slug->title} }}
                    </div>


                    @if($one->url != "")
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption largewhitebg_button1   tp-resizeme slidetxt"
                         id="slide-21-layer-2"
                         data-x="center"
                         data-y="342"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                         data-start="1400"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 6;"><a href="{{ $one->url }}" target="_blank"  class="samem">{{ trans("lang.more") }}</a> </div>
                    @endif





                    @if(!$one->images->isEmpty())
                    @if(isset($one->images[0]))
                    <div class="tp-caption  IMG1 tp-resizeme"
                         id="slide-21-layer-4"
                         data-x="718"
                         data-y="22"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:-50px;opacity:0;s:300;s:300;"
                         data-start="2000"
                         data-responsive_offset="on"


                         style="z-index: 8;">
                        <img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[0]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina>
                    </div>
                    @endif
                    <!-- LAYER NR. 5 -->
                    @if(isset($one->images[1]))
                    <div class="tp-caption  IMG2 tp-resizeme"
                         id="slide-21-layer-5"
                         data-x="614"
                         data-y="123"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="2300"
                         data-responsive_offset="on"


                         style="z-index: 9;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[1]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    @endif
                    @if(isset($one->images[2]))
                    <div class="tp-caption IMG3  tp-resizeme"
                         id="slide-21-layer-6"
                         data-x="862"
                         data-y="67"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:50px;opacity:0;s:300;s:300;"
                         data-start="2600"
                         data-responsive_offset="on"


                         style="z-index: 10;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[2]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>


                    @endif
                    @if(isset($one->images[3]))
                    <div class="tp-caption  IMG4 tp-resizeme"
                         id="slide-21-layer-7"
                         data-x="823"
                         data-y="109"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="2900"
                         data-responsive_offset="on"


                         style="z-index: 11;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/m_', $one->images[3]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    @endif
                    @if(isset($one->images[4]))
                    <div class="tp-caption  IMG5 tp-resizeme"
                         id="slide-21-layer-8"
                         data-x="706"
                         data-y="337"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="y:bottom;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:bottom;s:300;s:300;"
                         data-start="3200"
                         data-responsive_offset="on"


                         style="z-index: 12;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[4]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    @endif
                    @if(isset($one->images[5]))
                    <div class="tp-caption  IMG6 tp-resizeme"
                         id="slide-21-layer-9"
                         data-x="756"
                         data-y="196"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="3500"
                         data-responsive_offset="on"


                         style="z-index: 13;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[5]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    @endif
                    @if(isset($one->images[6]))
                    <div class="tp-caption  IMG7 tp-resizeme"
                         id="slide-21-layer-10"
                         data-x="688"
                         data-y="316"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                         data-start="3800"
                         data-responsive_offset="on"


                         style="z-index: 14;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/s_', $one->images[6]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    @endif
                    @if(isset($one->images[7]))
                    <div class="tp-caption IMG8  tp-resizeme"
                         id="slide-21-layer-11"
                         data-x="936"
                         data-y="265"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:right;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:50px;opacity:0;s:300;s:300;"
                         data-start="4100"
                         data-responsive_offset="on"


                         style="z-index: 15;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[7]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    @endif
                    @if(isset($one->images[8]))
                    <div class="tp-caption  IMG9 tp-resizeme"
                         id="slide-21-layer-12"
                         data-x="862"
                         data-y="362"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="4400"
                         data-responsive_offset="on"


                         style="z-index: 16;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/m_', $one->images[8]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    @endif
                    @endif
                </li>
                <!-- SLIDE  -->
                @else

                <!-- SLIDE  -->
                <li data-index="rs-{{ $key }}" data-transition="boxslide" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="800"  data-thumb="{{asset('front/uploads/revslider1/snapshot/bg.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset(str_replace('images/sliders/', 'images/sliders/thumb/l_', $one->image)) }}"  alt="" title="Slider1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    @if(!$one->images->isEmpty())
                    <!-- LAYER NR. 1 -->
                    @if(isset($one->images[0]))
                    <div class="tp-caption  sk1 tp-resizeme"
                         id="slide-20-layer-1"
                         data-x="793"
                         data-y="161"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="500"
                         data-responsive_offset="on"


                         style="z-index: 5;">
                        <img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[0]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    @endif
                    @if(isset($one->images[1]))
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption  sk2 tp-resizeme"
                         id="slide-20-layer-2"
                         data-x="727"
                         data-y="273"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="800"
                         data-responsive_offset="on"


                         style="z-index: 6;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/m_', $one->images[1]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    @endif
                    @if(isset($one->images[2]))
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption  sk3 tp-resizeme"
                         id="slide-20-layer-3"
                         data-x="714"
                         data-y="108"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="1100"
                         data-responsive_offset="on"


                         style="z-index: 7;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[2]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    <!-- LAYER NR. 4 -->
                    @endif
                    @if(isset($one->images[3]))
                    <div class="tp-caption  sk4 tp-resizeme"
                         id="slide-20-layer-4"
                         data-x="495"
                         data-y="299"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="1400"
                         data-responsive_offset="on"


                         style="z-index: 8;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/m_', $one->images[3]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    <!-- LAYER NR. 5 -->
                    @endif
                    @if(isset($one->images[4]))
                    <div class="tp-caption sk5  tp-resizeme"
                         id="slide-20-layer-5"
                         data-x="617"
                         data-y="327"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="1700"
                         data-responsive_offset="on"


                         style="z-index: 9;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/m_', $one->images[4]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    <!-- LAYER NR. 6 -->
                    @endif
                    @if(isset($one->images[5]))
                    <div class="tp-caption  sk6 tp-resizeme"
                         id="slide-20-layer-6"
                         data-x="513"
                         data-y="67"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="2000"
                         data-responsive_offset="on"


                         style="z-index: 10;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/l_', $one->images[5]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    <!-- LAYER NR. 7 -->
                    @endif
                    @if(isset($one->images[6]))
                    <div class="tp-caption  sk7 tp-resizeme"
                         id="slide-20-layer-7"
                         data-x="712"
                         data-y="181"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;s:300;s:300;"
                         data-start="2300"
                         data-responsive_offset="on"


                         style="z-index: 11;"><img src="{{asset(str_replace('images/sliders/images/', 'images/sliders/images/thumb/m_', $one->images[6]->image)) }}" alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>
                    @endif
                    @endif
                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption large_bold_white_med   tp-resizeme slidetxt"
                         id="slide-20-layer-8"
                         data-x="center"
                         data-y="261"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:left;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                         data-start="2600"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 12;"> {{ $one->{$slug->title} }}
                    </div>
                    @if($one->url != "")
                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption largewhitebg_button1   tp-resizeme slidetxt"
                         id="slide-20-layer-9"
                         data-x="center"
                         data-y="342"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-transform_idle="o:1;"

                         data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="x:-50px;opacity:0;s:300;s:300;"
                         data-start="2900"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"


                         style="z-index: 13;"><a href="{{ $one->url }}" target="_blank" class="samem">{{ trans("lang.more") }}</a> </div>
                    @endif
                    <!-- LAYER NR. 10 -->
                </li>
                @endif
                @endforeach
                <!-- SLIDE  -->


            </ul>
        </div>
    </div>
</div>

<section id="content" class="pt0">
    <div class="global-map-area4 section">
        <div class="container">
            <div class="text-center description">
                <h1>{{ trans("lang.who_we_are") }}</h1>
                <p> {{ $settings->{$slug->about_us} }} </p>

            </div>
            <br />
            <div class="row">
                <div class="col-md-8 col-xs-12 pull-left">

                    <div class="tab-container style1">
                        <ul class="tabs full-width">
                            <li class="active"><a href="#unlimited-layouts" data-toggle="tab">{{ trans("lang.vision") }}</a></li>
                            <li><a href="#design-inovation" data-toggle="tab">{{ trans("lang.mission") }}</a></li>
                            <li><a href="#best-support" data-toggle="tab">{{ trans("lang.why_us") }}</a></li>
                            <li><a href="#8-sliders" data-toggle="tab">{{ trans("lang.what_we_do") }}</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="unlimited-layouts">
                                <h4>{{ trans("lang.vision") }}</h4>
                                <p>  </p>

                                <p>{{ $settings->{$slug->vision} }}                                </p>

                                <a href="" class="button pull-right">{{ trans("lang.more") }}</a>
                            </div>
                            <div class="tab-pane fade" id="design-inovation">
                                <h4>{{ trans("lang.mission") }}</h4>
                                <p> {{ $settings->{$slug->mission} }}</p>
                                <a href="#" class="button pull-right">{{ trans("lang.more") }}</a>
                            </div>
                            <div class="tab-pane fade" id="best-support">
                                <h4>{{ trans("lang.why_us") }}</h4>
                                <p>  {{ $settings->{$slug->why_us} }}</p>
                                <a href="#" class="button pull-right">{{ trans("lang.more") }}</a>
                            </div>
                            <div class="tab-pane fade" id="8-sliders">
                                <h4>{{ trans("lang.what_we_do") }}</h4>
                                <p>  {{ $settings->{$slug->what_we_do} }} </p>
                                <a href="#" class="button pull-right">{{ trans("lang.more") }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12 pull-left">

                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/H5gOj8aIFl4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div         class="global-map-area promo-box no-margin parallax" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="content-section description pull-right col-sm-8">
                <div class="table-wrapper hidden-table-sm">
                    <div class="table-cell">
                        <h2 class="m-title">
                            {{ trans("lang.select_the_flight,_hotels_and_date_required") }}
                            <br />
                            <em>
                                {{ trans("lang.now_you_can_design_umrah_as_you_want") }}
                            </em>
                        </h2>
                    </div>
                    <div class="table-cell action-section col-md-4  pull-left animated" data-animation-type="fadeInUp">
                        <button class="full-width btn-large">{{ trans("lang.make_your_umrah") }}</button>
                    </div>
                </div>
            </div>
            <div class="image-container col-sm-4 pull-left">
                <img src="{{ asset('front/images/flight/home/girl.png') }}" alt="" class="animated" data-animation-type="fadeInUp" />
            </div>
        </div>
    </div>
    <div class="section container">
        <div class="row">
            <h2 class="pull-left">{{ trans("lang.special_offers") }}</h2>
            <div class="col-md-2 buttn mb10 pull-right">
                <button class="full-width btn-large">{{ trans("lang.groups_book") }}</button>
            </div>
            <div class="col-md-2 pull-right">
                <button class="full-width btn-large">{{ trans("lang.umrah_packages") }}</button>
            </div>
        </div>
        <div class="row image-box hotel listing-style1">



            @foreach($packages as $one)
            <div class="col-xs-12 col-sm-6 col-md-3 pull-left">
                <article class="box">
                    <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
                        <a class="hover-effect" href="{{ url('/'.$lang.'/programs/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}" title="{{ $one->{$slug->title} }}">
                            <img alt='{{ $one->{$slug->title} }}' title="{{ $one->{$slug->title} }}" style="width: 270px;height: 161px;" src="{{ asset($one->image) }}" >
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
                        <p class="description">{{ mb_substr($one->{$slug->content}, 0, 120) }}</p>
                        <div class="action">
                            <a href="{{ url('/'.$lang.'/programs/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}" class="button btn-small">{{ trans("lang.more") }}</a>
                            <a href="{{ url('/'.$lang.'/programs/book/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}" class="button btn-small yellow">{{ trans("lang.book_now") }}</a>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>



    <div class="global-map-area2 mobile-section parallax" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="table-wrapper hidden-table-sm">
                <div class="col-md-6 description section table-cell">
                    <h1>{{ trans('lang.ehgezly_website') }}</h1>

                    <br>


                    <a class="button btn-extra blue"><i class="soap-icon-hotel-2"></i><span> <em>{{ trans('lang.world_hotels') }}</em></span></a>
                    <a class="button btn-extra blue"><i class="soap-icon-insurance"></i><span><em>{{ trans('lang.umrah_plus') }}</em></span></a>
                </div>
                <div class="col-md-6 image-wrapper table-cell hidden-sm">
                    <img src="{{ asset('front/images/travelo_site.png') }}" alt="" class="animated" data-animation-type="fadeInUp">
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="text-center description block">
                <h1>{{ trans('lang.hotels') }}</h1>
                <p>{{ trans('lang.know_with_us_the_most_important_and_best_hotels_in_Saudi_Arabia') }}</p>
            </div>


            <div class="block hotels-logo-carousel style2  " data-animation="slide" data-item-width="370" data-item-margin="30">
                <ul class="slides image-box style1 tour-packages">
                    @foreach($hotels as $one)
                    <li>
                        <article class="box">
                            <figure>
                                <a class="hover-effect" title="{{ $one->{$slug->title} }}" href="{{ url('/'.$lang.'/hotels/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                                    <img  style="width: 370px;height: 220px;" alt="{{ $one->{$slug->title} }}" title="{{ $one->{$slug->title} }}" src="{{ asset($one->image) }}" draggable="false">
                                </a>
                            </figure>
                            <div class="details">
                                <h4 class="box-title">{{ $one->{$slug->title} }}</h4>
                            </div>
                        </article>
                    </li>
                    @endforeach


                </ul>
            </div>



        </div>
    </div>



    <section class="section  global-map-area2">
        <div class="container">
            <div class="row text-center description block">
                <h1>{{ trans('lang.our_agents_around_the_world') }}</h1>
                <p>
                    {{ trans('lang.Know_with_our_agents_around_the_world_to_know_the_agents_in_your_country_choose_the_Bad') }}
                </p>
            </div>


            <div class="row">
                <div class="col-md-4 pull-left">
                    <div class="col-xs-6 col-md-12">

                        <div class="selector mb20">
                            <select id="agent_country" class="full-width">
                                <option value="0">{{ trans('lang.all_countries') }}</option>
                                @foreach($countries as $one)
                                <option value="{{ $one->id }}">{{ $one->{$slug->title} }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-12">
                        <button id="search_agent_button" class="full-width btn-large">{{ trans('lang.search_for_agents') }}</button>
                    </div>
                </div>

                <div class="col-md-8 col-xs-12 pull-left" id="agents_block">

                    @foreach($agents as $one)
                    <div class="col-md-3 col-xs-6 wkyle">
                        <a href="{{ $one->url }}" target="_blank">
                            <img style="height: 58px;width: 153px;" src="{{ asset($one->image) }}" alt="{{ $one->title }}"  title="{{ $one->title }}">
                        </a>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="text-center description block">
                <h1>{{ trans('lang.the_most_important_sightseeing') }}</h1>
                <p>
                    {{ trans('lang.Know_with_us_the_most_important_and_best_religious_and_holy_shrines_in_the_Kingdom_of_Saudi_Arabia') }}
                </p>

            </div>


            <div class="block image-carousel style2 flexslider ltr" data-animation="slide" data-item-width="370" data-item-margin="30">
                <ul class="slides image-box style1 tour-packages">

                    @foreach($cities as $one)
                    <li>
                        <article class="box animated" data-animation-type="fadeInLeft">
                            <figure>
                                <a href="{{ url('/'.$lang.'/destinations/details/'.$one->id.'/'.str_replace(' ', '-', $one->{$slug->title})) }}">
                                    <img style="width: 370px;height: 220px;" src="{{ asset($one->image) }}" alt="{{ $one->{$slug->title} }}" title="{{ $one->{$slug->title} }}">
                                </a>
                                <figcaption>
                                    <h2 class="caption-title">{{ $one->{$slug->title} }}</h2>
                                </figcaption>
                            </figure>
                        </article>
                    </li>
                    @endforeach



                </ul>
            </div>



        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <h1>{{ trans('lang.partners') }}</h1>
                <div class="investor-slideshow image-carousel style2 investor-list ltr" data-animation="slide" data-item-width="170" data-item-margin="30">
                    <ul class="slides">

                        @foreach($partners as $one)
                        <li>
                            <div class="travelo-box animated" data-animation-type="fadeInUp">
                                <a href="{{ $one->url }}" target="_blank"><img src="{{ asset($one->image) }}" alt="{{ $one->title }}" title="{{ $one->title }}"></a>
                            </div>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="global-map-area section parallax" data-stellar-background-ratio="0.5">
        <div class="container">
            <h1 class="text-center white-color">{{trans('lang.testimonials')}}</h1>
            <div class="testimonial style3">
                <ul class="slides ">
                    @foreach($reviews as $one)
                    <li>
                        <div class="author">
                            <a href="javascript:;">
                                <img src="{{ asset($one->image) }}" alt="" width="74" height="74" />
                            </a>
                        </div>
                        <blockquote class="description"> {{ $one->{$slug->content} }} </blockquote>
                        <h2 class="name">{{ $one->title }}</h2>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

    <div class="container section">
        <h2>{{ trans('lang.photo_gallery') }}</h2>
        <div class="flexslider image-carousel style2 row-2 ltr " data-animation="slide" data-item-width="170" data-item-margin="30">
            <ul class="slides">
                @foreach($gallery as $one)
                <li>
                    <a href="{{ asset($one->image) }}" class="hover-effect galleryimg" data-lightbox="example-set" data-title="{{ $one->{$slug->title} }}">
                        <img src="{{ asset($one->image) }}" alt="{{ $one->{$slug->title} }}" title="{{ $one->{$slug->title} }}" style="width: 170px;height: 161px;" />
                        <p class="caption">{{ $one->{$slug->title} }}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


</section>
@stop
