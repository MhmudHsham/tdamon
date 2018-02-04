<header id="header" class="navbar-static-top">

    <div class="topnav hidden-xs">
        <div class="container-fluid">
            <nav class="tg-infonav">
                <ul>
                    <li>
                        <i><img src="{{asset('front/images/icons/icon-01.png')}}" alt="image destinations"></i>
                        <span> {{ $settings->site_phone }}</span>
                    </li>
                    <li>
                        <i><img src="{{asset('front/images/icons/icon-02.png')}}" alt="image destinations"></i>
                        <span>{{ trans('lang.groups_book') }}
                            <a href="{{ url('/'.$lang.'/make_umrah') }}">{{ trans('lang.send_request_now') }}</a></span>
                    </li>
                </ul>
            </nav>
            <div class="tg-addnavcartsearch">
                <nav class="tg-addnav">
                    <ul>
                        <li><a href="{{ url('/'.$lang.'/contact') }}">{{ trans('lang.contact_us') }}</a></li>
                        <li><a href="{{ url('/'.$lang.'/about') }}">{{ trans('lang.about_us') }}</a></li>
                    </ul>
                </nav>

                <nav class="tg-cartsearch">
                    <ul>
                        <li class="ribbon langandcurrency">
                            <a href="javascript:;" data-toggle="collapse">{{ LaravelLocalization::getCurrentLocaleName() }}</a>
                            <ul class="menu mini">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if(LaravelLocalization::getCurrentLocaleName() != $properties['native'])
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        <li class="ribbon langandcurrency">
                            @php($current_sign = Session::get("currency_sign"))
                            <a href="javascript:;" data-toggle="collapse">{{ trans("lang.currency") . " (" . $current_sign . ")" }} </a>
                            <ul class="menu mini">
                                @if(!$currencies->isEmpty())
                                @foreach($currencies as $one)
                                <li>
                                    <a href="" id="currency_{{ $one->id }}" data-sign="{{ $one->sign }}" data-id="{{ $one->id }}" data-price="{{ $one->price }}" data-title ="{{ $one->{$slug->title} }}" class="nav_currency" title="{{ $one->{$slug->title} }}">{{ $one->{$slug->title} }}</a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                <!--<li><a href="javascript:void(0);"><img src="images/icons/icon-04.png" alt="image destinations"></a></li>-->
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="main-header">

        <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
            {{ trans('lang.main_menu') }}
        </a>

        <div class="container">
            <h1 class="logo navbar-brand">
                <a href="{{ url('/'.$lang.'/') }}" title="{{ $settings->site_title_en }}">
                    <img src="{{asset('front/images/logo.png')}}" alt="{{ $settings->site_title_en }}" />
                </a>
            </h1>

            <nav id="main-menu" role="navigation">
                <ul class="menu">
                    <li class="current-menu-item hvr-pulse"><a href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/') }}">{{ trans('lang.home') }}</a></li>
                    <li class="hvr-pulse"><a href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/about') }}">{{ trans('lang.about_us') }}</a>

                        <ul>
                            <li><a href="{{ url('/'.$lang.'/about') }}">{{ trans('lang.vision') }}</a></li>
                            <li><a href="{{ url('/'.$lang.'/about') }}">{{ trans('lang.mission') }}</a></li>
                            <li><a href="{{ url('/'.$lang.'/about') }}">{{ trans('lang.target') }}</a></li>

                        </ul>
                    </li>
                    <li class="hvr-pulse menu-item-has-children">
                        <a href="{{ url('/'.$lang.'/destinations') }}">
                            {{ trans('lang.sightseeing') }}
                        </a>
                        <ul>
                            @foreach($destinations as $one)
                            <li>
                                <a href="{{ url('/'.$lang.'/destinations/details/'.$one->id.'/'.str_replace(' ','-', $one->{$slug->title})) }}">
                                    {{ $one->{$slug->title} }}
                                </a>
                            </li>
                            @endforeach

                        </ul>



                    </li>

                    <li class="hvr-pulse"><a href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/services') }}">{{ trans('lang.services') }}</a></li>

                    <li class="hvr-pulse"><a href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/make_your_umrah') }}">{{ trans('lang.make_your_umrah') }}</a></li>
                    <li class="hvr-pulse"><a href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/hotels') }}">{{ trans('lang.hotels') }}</a></li>
                    <li class="hvr-pulse"><a href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/programs') }}">{{ trans('lang.umrah_packages') }}</a></li>
                    <li class="hvr-pulse menu-item-has-children"><a href="javascript:void(0);">{{ trans('lang.ehgezly') }}</a>

                        <ul>
                            <li><a href="#">World Hotels</a></li>
                            <li><a href="#">Umroh Plus</a></li>

                        </ul>

                    </li>

                    <li class="hvr-pulse"><a href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/partners') }}">{{ trans('lang.partners') }}</a></li>

                    <li class="hvr-pulse"><a href="{{ url('/'.LaravelLocalization::getCurrentLocale().'/news') }}">{{ trans('lang.news') }}</a></li>

                </ul>
            </nav>
        </div>

        <nav id="mobile-menu-01" class="mobile-menu collapse">
            <ul id="mobile-primary-menu" class="menu">

                <li class="hvr-pulse"><a href="{{ url('/'.$lang.'/') }}">{{ trans('lang.home') }}</a></li>
                <li class="hvr-pulse"><a href="{{ url('/'.$lang.'/about') }}">{{ trans('lang.about_us') }}</a>
                    <ul>
                        <li><a href="{{ url('/'.$lang.'/about') }}">{{ trans('lang.vision') }}</a></li>
                        <li><a href="{{ url('/'.$lang.'/about') }}">{{ trans('lang.mission') }}</a></li>
                        <li><a href="{{ url('/'.$lang.'/about') }}">{{ trans('lang.target') }}</a></li>

                    </ul>
                </li>
                <li class="hvr-pulse menu-item-has-children"><a href="javascript:void(0);">{{ trans('lang.sightseeing') }}</a>
                    <ul>
                        <li><a href="?page=citys_en">Makkah</a></li>
                        <li><a href="?page=citys_en">Madina El Monawara</a></li>
                    </ul>
                </li>
                <li class="hvr-pulse"><a href="{{ url('/'.$lang.'/services') }}">{{ trans('lang.services') }}</a></li>
                <li class="hvr-pulse"><a href="{{ url('/'.$lang.'/make_your_umrah') }}">{{ trans('lang.make_your_umrah') }}</a></li>
                <li class="hvr-pulse"><a href="{{ url('/'.$lang.'/hotels') }}">{{ trans('lang.hotels') }}</a></li>

                <li class="hvr-pulse"><a href="{{ url('/'.$lang.'/programs') }}">{{ trans('lang.umrah_packages') }}</a></li>
                <li class="hvr-pulse menu-item-has-children"><a href="javascript:void(0);">{{ trans('lang.ehgezly') }}</a>

                    <ul>
                        <li><a href="#">World Hotels</a></li>
                        <li><a href="#">Umroh Plus</a></li>

                    </ul>

                </li>
                <li class="hvr-pulse"><a href="{{ url('/'.$lang.'/partners') }}">{{ trans('lang.partners') }}</a></li>

                <li class="hvr-pulse"><a href="{{ url('/'.$lang.'/news') }}">{{ trans('lang.news') }}</a></li>
            </ul>

            <ul class="mobile-topnav container">
                <li><a href="#">{{ trans('lang.my_account') }}</a></li>
                <li class="ribbon language menu-color-skin">
                    <a href="#" data-toggle="collapse">العربية</a>
                    <ul class="menu mini">
                        <li><a href="?page=index_en" title=" ">ENGLISH</a></li>
                        <li><a href="#" title="">الأردية </a></li>

                    </ul>
                </li>
                <li><a href="#" class="soap-popupbox">الدخول</a></li>
                <li><a href="#" class="soap-popupbox">تسجيل جديد</a></li>

            </ul>
        </nav>
    </div>

</header>
