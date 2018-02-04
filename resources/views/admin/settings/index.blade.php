@extends('admin.app')
@section('title', ' | إعدادات الموقع')

@section('styles')
{!! HTML::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! HTML::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') !!}
{!! HTML::style('assets/global/plugins/fancybox/source/jquery.fancybox.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-toastr/toastr-rtl.min.css') !!}
@stop


@section('content')
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal form-row-seperated" method="post" action="{!! url('admin/settings/update') !!}" enctype="multipart/form-data" id="settings_form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="portlet">
                <div class="portlet-body">
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button> تأكد من البيانات المدخلة
                    </div>
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> تم بنجاح
                    </div>
                    <div class="tabbable-bordered">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_general" data-toggle="tab"> الإعدادات العامة </a>
                            </li>
                            <li>
                                <a href="#tab_address" data-toggle="tab"> وسائل التواصل </a>
                            </li>
                            <li>
                                <a href="#tab_social" data-toggle="tab"> التواصل الإجتماعى </a>
                            </li>

                            <!--                            <li>
                                                            <a href="#tab_email" data-toggle="tab"> إعدادات البريد الإلكترونى </a>
                                                        </li>-->
                            <li>
                                <a href="#tab_about" data-toggle="tab"> عن الشركة </a>
                            </li>
                            <!--                            <li>
                                                            <a href="#tab_reviews" data-toggle="tab"> Reviews
                                                                <span class="badge badge-success"> 3 </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_history" data-toggle="tab"> History </a>
                                                        </li>-->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_general">
                                <div class="form-body">
                                    <div class="form-group ">
                                        <label class="control-label col-md-2"> لوجو الموقع  </label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                    <img src="{{ asset($settings->site_logo) }}">
                                                </div>
                                                <div>
                                                    <span class="btn red btn-outline btn-file">
                                                        <span class=" "> الصورة الحالية</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                                <div>
                                                    <span class="btn red btn-outline btn-file">
                                                        <span class="fileinput-new"> اختر صورة </span>
                                                        <span class="fileinput-exists"> تغيير </span>
                                                        <input type="file" name="site_logo"> </span>
                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-md-2"> فيديو الموقع  </label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $settings->site_video }}" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                                <div>
                                                    <span class="btn red btn-outline btn-file">
                                                        <span class=" "> الفيديو الحالي</span>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> فيديو جديد
                                            <span class="required"> *  </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" name="site_video" value="https://www.youtube.com/watch?v=-{{ $settings->site_video }}" class="form-control" />
                                            </div>

                                        </div>
                                    </div>


                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> البيانات بالعربية </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <br />
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> إسم الموقع
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input type="text" class="form-control" name="site_title_ar" value="{{ $settings->site_title_ar }}" placeholder="">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> وصف الموقع
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="site_description_ar">{{ $settings->site_description_ar }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> الكلمات الدلالية
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="site_keywords_ar">{{ $settings->site_keywords_ar }}</textarea>
                                                            <!--<span class="help-block"> shown in product listing </span>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> البيانات بالإنجليزية </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <br />
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> إسم الموقع
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input type="text" class="form-control" name="site_title_en" value="{{ $settings->site_title_en }}" placeholder="">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> وصف الموقع
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="site_description_en">{{ $settings->site_description_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> الكلمات الدلالية
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="site_keywords_en">{{ $settings->site_keywords_en }}</textarea>
                                                            <!--<span class="help-block"> shown in product listing </span>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> البيانات بالأردية </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <br />
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> إسم الموقع
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input type="text" class="form-control" name="site_title_ur" value="{{ $settings->site_title_ur }}" placeholder="">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> وصف الموقع
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="site_description_ur">{{ $settings->site_description_ur }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> الكلمات الدلالية
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="site_keywords_ur">{{ $settings->site_keywords_ur }}</textarea>
                                                            <!--<span class="help-block"> shown in product listing </span>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane" id="tab_address">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> البريد الإلكترونى
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_email" value="{{ $settings->site_email }}" placeholder=""> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> رقم الهاتف
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_phone" value="{{ $settings->site_phone }}" placeholder=""> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> رقم الفاكس
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_fax" value="{{ $settings->site_fax }}" placeholder=""> </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> مقر الشركة بالعربية
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="site_address_ar">{{ $settings->site_address_ar }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> مقر الشركة بالإنجليزية
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="site_address_en">{{ $settings->site_address_en }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> مقر الشركة بالأردية
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="site_address_ur">{{ $settings->site_address_ur }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="tab-pane" id="tab_social">

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Facebook
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_facebook" value="{{ $settings->site_facebook }}" placeholder=""> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Twitter
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_twitter" value="{{ $settings->site_twitter }}" placeholder=""> </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Linkedin
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_linkedin" value="{{ $settings->site_linkedin }}" placeholder=""> </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Instagram
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_instagram" value="{{ $settings->site_instagram }}" placeholder=""> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Google plus
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_gplus" value="{{ $settings->site_gplus }}" placeholder=""> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Youtube
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="site_youtube" value="{{ $settings->site_youtube }}" placeholder=""> </div>
                                        </div>
                                    </div>
                                </div>


                            </div>











                            <div class="tab-pane" id="tab_about">
                                <div class="form-body">


                                    <div class="panel-group" id="accordionAbout">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionAbout" href="#AboutOne"> البيانات بالعربية </a>
                                                </h4>
                                            </div>
                                            <div id="AboutOne" class="panel-collapse collapse in">
                                                <br />
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> عن الشركة
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="about_us_en">{{ $settings->about_us_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Vision
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="vision_en">{{ $settings->vision_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Mission
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="mission_en">{{ $settings->mission_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Goal
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="goal_en">{{ $settings->goal_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionAbout" href="#AboutTwo"> البيانات بالإنجليزية </a>
                                                </h4>
                                            </div>
                                            <div id="AboutTwo" class="panel-collapse collapse">
                                                <br />
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> عن الشركة
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="about_us_en">{{ $settings->about_us_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Vision
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="vision_en">{{ $settings->vision_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Mission
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="mission_en">{{ $settings->mission_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Goal
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="goal_en">{{ $settings->goal_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionAbout" href="#AboutThree"> البيانات بالأردية </a>
                                                </h4>
                                            </div>
                                            <div id="AboutThree" class="panel-collapse collapse">
                                                <br />
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> عن الشركة
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="about_us_en">{{ $settings->about_us_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Vision
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="vision_en">{{ $settings->vision_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Mission
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="mission_en">{{ $settings->mission_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"> Goal
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <textarea class="form-control" rows='5' name="goal_en">{{ $settings->goal_en }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

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
        </form>
    </div>
</div>
@stop


@section('plugins')
{!! HTML::script('assets/global/plugins/bootstrap-toastr/toastr.min.js') !!}
{!! HTML::script('assets/global/plugins/select2/js/select2.full.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}
{!! HTML::script('assets/global/scripts/datatable.js') !!}
{!! HTML::script('assets/global/plugins/datatables/datatables.min.js') !!}
{!! HTML::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') !!}
{!! HTML::script('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') !!}
{!! HTML::script('assets/global/plugins/plupload/js/plupload.full.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') !!}
{!! HTML::script('assets/global/plugins/ckeditor/ckeditor.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-markdown/lib/markdown.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
@stop
@section('scripts')
{!! HTML::script('assets/pages/scripts/ecommerce-products-edit.min.js') !!}
{!! HTML::script('assets/pages/scripts/validation/settings.js') !!}
{!! HTML::script('assets/pages/scripts/ui-toastr.min.js') !!}
@stop





