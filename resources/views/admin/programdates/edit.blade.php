@extends('admin.app')
@section('title', ' | تعديل سعر لبرنامج')

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
                    <span class="caption-subject font-green bold uppercase">تعديل سعر لبرنامج</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{!! url('admin/programdates/update/'.$id) !!}" id="programdate_form" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" value="edit" id="form_type" />
                    <input type="hidden" value="{{ $edit->currency_id }}" id="currency_id" />
                    <input type="hidden" value="{{ $edit->nationality_id }}" id="nationality_id" />
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> تأكد من البيانات المدخلة
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> تم بنجاح
                        </div>

                        <div class="form-group  margin-top-20">
                            <label class="control-label col-md-2"> الجنسية
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <select name="nationality_id" id="nationality" class="form-control">
                                        <option value="" selected disabled>اختر الجنسية</option>
                                        @foreach($nationalities as $one)
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
                                    <input type="text" class="form-control" name="price" value="{{ $edit->price }}"  />
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
                                        <option value="" selected disabled> اختر العملة</option>
                                        @foreach($currencies as $one)
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
                                    <input name="start_date" class="form-control datetime" value="{{ $edit->start_date }}" id="start_date" type="date" />
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
{!! HTML::script('assets/pages/scripts/validation/programdate.js') !!}
{!! HTML::script('assets/pages/scripts/form-input-mask.min.js') !!}
@stop
