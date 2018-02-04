@extends('admin.app')
@section('title', ' | إضافة غرفة لفندق')

@section('styles')
{!! HTML::style('assets/global/plugins/select2/css/select2.min.css') !!}
{!! HTML::style('assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
@stop


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">إضافة غرفة لفندق</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{!! url('admin/hotels/store_room/'.$hotel_id) !!}" id="hotel_form" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" value="room" id="form_type" />
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> تأكد من البيانات المدخلة
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> تم بنجاح
                        </div>

                        <div class="form-group  margin-top-20">
                            <label class="control-label col-md-2"> الغرفة
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <select name="room_id" id="room" class="form-control">
                                        <option value="" selected disabled>اختر الغرفة</option>
                                        @foreach($rooms as $one)
                                        <option value="{{ $one->id }}">{{ $one->title_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  margin-top-20">
                            <label class="control-label col-md-2"> الوجبة
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <select name="meal_id" id="meal" class="form-control">
                                        <option value="" selected disabled>اختر الوجبة</option>
                                        @foreach($meals as $one)
                                        <option value="{{ $one->id }}">{{ $one->title_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group margin-top-20">
                            <label class="control-label col-md-2">من تاريخ</label>
                            <div class="col-md-3">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input name="start_date" class="form-control datetime" id="start_date" type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group margin-top-20">
                            <label class="control-label col-md-2">إلى تاريخ</label>
                            <div class="col-md-3">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input name="end_date" class="form-control datetime" id="end_date" type="date" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group  margin-top-20">
                            <label class="control-label col-md-2"> العملة
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <select name="currency_id" id="currency" class="form-control">
                                        <option value="" selected disabled>اختر العملة</option>
                                        @foreach($currencies as $one)
                                        <option value="{{ $one->id }}">{{ $one->title_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group  margin-top-20">
                            <label class="control-label col-md-2"> السعر
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input type="text" class="form-control" name="price"  />
                                </div>
                            </div>
                        </div>




                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">حفظ</button>
                                </div>
                            </div>
                        </div>

                        <!-- END FORM-->
                    </div>
                </form>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>
@stop


@section('plugins')
{!! HTML::script('assets/global/plugins/select2/js/select2.full.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') !!}
{!! HTML::script('assets/global/plugins/ckeditor/ckeditor.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-markdown/lib/markdown.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
{!! HTML::script('assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery.input-ip-address-control-1.0.min.js') !!}
@stop
@section('scripts')
{!! HTML::script('assets/pages/scripts/validation/hotel.js') !!}
{!! HTML::script('assets/pages/scripts/form-input-mask.min.js') !!}
@stop
