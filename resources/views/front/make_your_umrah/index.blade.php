@extends('front.layout')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')
<div class="page-title-container">
    <div class="container">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div class="page-title make_title">
                <h2 class="entry-title">{{ trans("lang.make_your_umrah") }}</h2>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <ul class="breadcrumbs make_breadcrumbs">
                <li><a href="{{ url('/'.$lang.'/') }}">{{ trans("lang.home") }}</a></li>
                <li class="active">{{ trans("lang.make_your_umrah") }}</li>
            </ul>
        </div>
    </div>
</div>

<section id="content">
    <div class="container">
        <div id="main">
            <div class="large-block image-box style6">
                <div class="col-lg-10  col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <form action="#" method="post" class="design_omrA" id="make_your_umrah_form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="type" value="0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.season") }}</label>
                                    <select name="season_id" class="form-control required_field">
                                        <option value="">{{ trans("lang.select_season") }}</option>
                                        @foreach($categories as $one)
                                        <option value="{{ $one->id }}">{{ $one->{$slug->title} }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.trip_date") }}</label>
                                    <input type="date" name="trip_date" class="form-control datepicker required_field" placeholder="" >
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.makka_hotel") }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </span>
                                        <input type="text" name="makka_hotel" class="form-control required_field" placeholder="{{ trans("lang.makka_hotel") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.numer_of_nights") }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <input type="number" name="makka_nights" class="form-control required_field" placeholder="{{ trans("lang.numer_of_nights") }}">
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.madina_hotel") }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </span>
                                        <input type="text" name="madina_hotel" class="form-control required_field" placeholder="{{ trans("lang.madina_hotel") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.numer_of_nights") }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <input type="number" name="madina_nights" class="form-control required_field" placeholder="{{ trans("lang.numer_of_nights") }}">
                                    </div>
                                </div>
                            </div>





                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group borderinputted">
                                    <label class="col-md-3 control-label">{{ trans("lang.services") }}</label>
                                    <div class="col-md-9">
                                        <div class="des-checkbox-inline">
                                            @foreach($services as $one)
                                            <label class="des-checkbox">
                                                <input type="checkbox" name="services[]" value="{{ $one->id }}">
                                                <img src="{{ asset($one->image) }}" style="width: 20px;height: 20px;" />
                                                {{ $one->{$slug->title} }}
                                                <span></span>
                                            </label>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>







                            <div class="rooms_block">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans("lang.rooms") }}</label>
                                        <select name="rooms[]" class="form-control rooms required_field">
                                            <option value="">{{ trans("lang.select_room") }}</option>
                                            @foreach($rooms as $one)
                                            <option value="{{ $one->id }}">{{ $one->{$slug->title} }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans("lang.number_of_rooms") }}</label>
                                        <div class="input-group">
                                            <input type="number" name="number_of_rooms[]" class="form-control required_field" placeholder="{{ trans("lang.number_of_rooms") }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans("lang.number_of_adults") }}</label>
                                        <div class="input-group">
                                            <input type="number"  name="number_of_adults[]" class="form-control required_field" placeholder="{{ trans("lang.number_of_adults") }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans("lang.number_of_children") }}</label>
                                        <div class="input-group">
                                            <input type="number" value="0" name="number_of_children[]" class="form-control" placeholder="{{ trans("lang.number_of_children") }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans("lang.number_of_infants") }}</label>
                                        <div class="input-group">
                                            <input type="number" value="0" name="number_of_infants[]" class="form-control" placeholder="{{ trans("lang.number_of_infants") }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label></label>
                                        <div class="input-group">
                                            <a href="" class="btn btn-info"  id="add_more" >{{ trans("lang.more") }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.name") }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" name="name" class="form-control required_field" placeholder="{{ trans("lang.name") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.email") }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="text" name="email" class="form-control" placeholder="{{ trans("lang.email") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.phone") }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <input type="number" name="phone" class="form-control required_field" placeholder="{{ trans("lang.phone") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans("lang.notes") }}</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-archive"></i>
                                        </span>
                                        <textarea name="notes"  cols=""  class="form-control " rows="7" placeholder="{{ trans("lang.notes") }}"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-lg-offset-5 col-md-offset-5">
                                <div class="form-group">
                                    <label></label>
                                    <div class="input-group">
                                        <input type="submit" id="submit_btn" value="{{ trans("lang.send_request_now") }}" class="btn btn-success" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('libraries_scripts')
{!! HTML::script('assets/global/plugins/jquery.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}
{!! HTML::script('front/mine/make_your_umrah.js') !!}
@stop