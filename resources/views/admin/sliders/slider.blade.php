@extends('admin.app')
@section('title', ' | إضافة صور للسلايدر')
@section('styles')
{!! HTML::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! HTML::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}
{!! HTML::style('assets/global/css/components-rtl.min.css') !!}
{!! HTML::style('assets/global/css/plugins-rtl.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-toastr/toastr-rtl.min.css') !!}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">سلايدر خدمة</span>
                </div>
            </div>
            <div class="portlet-body">
                <form action="{!! url('admin/sliders/store_slider') !!}" id="sliders_slider_form" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" value="{{ $id }}" name="slider_id" />
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> تأكد من البيانات المدخلة
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> تم بنجاح
                        </div>
                        <div class="form-group  margin-top-20">
                            <label class="control-label col-md-2"> تحميل صور للسلايدر
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input type="file" class="form-control" name="image[]" multiple="" /> </div>
                            </div>
                            <div class="  col-md-2">
                                <button type="submit" class="btn green">حفظ</button>
                            </div>
                        </div>




                        <!-- END FORM-->
                    </div>
                </form>
                <div class="mt-element-card mt-element-overlay">
                    <div class="row">





                        @foreach($slider as $one)
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 tr_{{ $one->id }}">
                            <div class="mt-card-item">
                                <div class="mt-card-avatar mt-overlay-1">
                                    <img src="{{ asset($one->image) }}" style="width: 150px;height: 150px;" />
                                    <div class="mt-overlay">
                                        <ul class="mt-info">

                                            <li>
                                                <a  data-id="{!! $one->id !!}"   class="btn default btn-outline delete_link" href="{!! url('/admin/sliders/deleteslider/'.$one->id) !!}">
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach







                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('plugins')
{!! HTML::script('assets/global/scripts/datatable.js') !!}
{!! HTML::script('assets/global/plugins/datatables/datatables.min.js') !!}
{!! HTML::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-toastr/toastr.min.js') !!}
@stop
@section('scripts')
{!! HTML::script('assets/pages/scripts/table-datatables-editable.min.js') !!}
{!! HTML::script('assets/pages/scripts/files/general.js') !!}
{!! HTML::script('assets/pages/scripts/validation/sliders_slider.js') !!}
{!! HTML::script('assets/pages/scripts/ui-toastr.min.js') !!}
@stop




