@extends('admin.app')
@section('title', ' | تعديل بيانات فندق')

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
{!! HTML::style('assets/global/plugins/icheck/skins/all.css') !!}
@stop

<!--Distance from the Haram-->
@section('content')
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal form-row-seperated" method="post" action="{!! url('admin/hotels/update/'.$id) !!}" enctype="multipart/form-data" id="hotel_form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" value="edit" name="form_type" />
            <input type="hidden" id = "country_id" value="{{ $edit->country_id }}" />
            <input type="hidden" id = "city_id" value="{{ $edit->city_id }}" />
            <input type="hidden" id="selected_features" value="{{ $selected_features }}" />
            <input type="hidden" id="features" value="{{ $edit->features }}" />
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
                                <a href="#tab_general" data-toggle="tab"> البيانات بالعربية </a>
                            </li>
                            <li>
                                <a href="#tab_address" data-toggle="tab"> البيانات بالإنجليزية</a>
                            </li>
                            <li>
                                <a href="#tab_social" data-toggle="tab"> البيانات بالأردية</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_general">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> إسم الفندق
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" value="{{ $edit->title_ar }}" class="form-control" name="title_ar" placeholder="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> معلومات عن الفندق
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="content_ar">{{ $edit->content_ar }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> SEO keywords
                                            <span class="required">   </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="keywords_ar">{{ $edit->keywords_ar }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> SEO description
                                            <span class="required">   </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="description_ar">{{ $edit->description_ar }}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>










                            <div class="tab-pane" id="tab_address">
                                <div class="form-body">


                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> إسم الفندق
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="title_en" value="{{ $edit->title_en }}" placeholder="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> معلومات عن الفندق
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="content_en">{{ $edit->content_en }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> SEO keywords
                                            <span class="required">  </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="keywords_en">{{ $edit->keywords_en }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> SEO description
                                            <span class="required">  </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="description_en">{{ $edit->description_en }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>





                            <div class="tab-pane" id="tab_social">

                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> إسم الفندق
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" value="{{ $edit->title_ur }}" class="form-control" name="title_ur" placeholder="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> معلومات عن الفندق
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="content_ur">{{ $edit->content_ur }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> SEO keywords
                                            <span class="required">   </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="keywords_ur">{{ $edit->keywords_ur }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> SEO description
                                            <span class="required">  </span>
                                        </label>
                                        <div class="col-md-9">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <textarea class="form-control" rows='5' name="description_ur">{{ $edit->description_ur }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                </div>
            </div>

            <div class="form-group  margin-top-20">
                <label class="control-label col-md-2"> عدد النجوم
                    <span class="required">   </span>
                </label>
                <div class="col-md-9">
                    <div class="input-icon right">
                        <i class="fa"></i>
                        <input type="text" class="form-control" name="stars" value="{{ $details->stars }}" />
                    </div>
                </div>
            </div>

            <div class="form-group  margin-top-20">
                <label class="control-label col-md-2"> البعد عن الحرم
                    <span class="required">   </span>
                </label>
                <div class="col-md-9">
                    <div class="input-icon right">
                        <i class="fa"></i>
                        <input type="text" class="form-control" name="distance_from_the_haram" value="{{ $edit->distance_from_the_haram }}" />
                    </div>
                </div>
            </div>
            <div class="form-group  margin-top-20">
                <label class="control-label col-md-2"> الدولة
                    <span class="required"> * </span>
                </label>
                <div class="col-md-9">
                    <div class="input-icon right">
                        <i class="fa"></i>
                        <select name="country_id" id="country" class="form-control">
                            <option value="" selected disabled>اختر الدولة</option>
                            @foreach($countries as $one)
                            <option value="{{ $one->id }}">{{ $one->title_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group  margin-top-20" id="city_block">
                <label class="control-label col-md-2"> المدينة
                    <span class="required"> * </span>
                </label>
                <div class="col-md-9">
                    <div class="input-icon right">
                        <i class="fa"></i>
                        <select name="city_id" id="city" class="form-control">
                            <option value="" selected disabled>اختر المدينة</option>
                            @foreach($cities as $one)
                            <option value="{{ $one->id }}">{{ $one->title_ar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group  ">
                <label class="control-label col-md-2"> المميزات
                    <span class="required">   </span>
                </label>
                <div class="col-md-9">
                    <div class="icheck-inline">
                        @foreach($features as $one)
                        <label>
                            <input type="checkbox" name="features[]"  value="{{ $one->id }}" class="icheck features">
                            <img src="{{ asset($one->image) }}" style="width: 30px;height: 30px;" />
                            {{ $one->title_ar }}
                        </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <label class="control-label col-md-2"> الصورة  </label>
                <div class="col-md-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                            <img src="{{ asset($edit->image) }}">
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
                                <input type="file" name="image"> </span>
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
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
{!! HTML::script('assets/global/plugins/icheck/icheck.min.js') !!}
@stop
@section('scripts')
{!! HTML::script('assets/pages/scripts/ecommerce-products-edit.min.js') !!}
{!! HTML::script('assets/pages/scripts/validation/hotel.js') !!}
{!! HTML::script('assets/pages/scripts/ui-toastr.min.js') !!}
{!! HTML::script('assets/pages/scripts/form-icheck.min.js') !!}
@stop





