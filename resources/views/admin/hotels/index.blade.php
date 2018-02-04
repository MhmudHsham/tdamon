@extends('admin.app')
@section('title', ' | الفنادق')
@section('page_level', 'الفنادق')
@section('styles')
{!! HTML::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! HTML::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}
{!! HTML::style('assets/global/css/components-rtl.min.css') !!}
{!! HTML::style('assets/global/css/plugins-rtl.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-toastr/toastr-rtl.min.css') !!}
<style>
    .data_table_style{
        padding: 10px;
        background-color: #eee;
        border-right: 2px solid #36c6d3;
        border-left: 2px solid #36c6d3;
    }
    .labels{
        color: #36c6d3;
    }
</style>
@stop


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">كل الفنادق</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="{!! url('/admin/hotels/add') !!}" class="btn sbold green" id="sample_1_new">
                                    إضافة جديد
                                    <i class="fa fa-plus"></i>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <thead>
                        <tr>
                            <th class="all">#</th>
                            <th class="all">إسم الفندق</th>
                            <th class="all">إسم المدينة</th>
                            <th class="all">البعد عن الحرم</th>
                            <th class="none"></th>
                            <th class="all">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($hotels as $one)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $one->title_ar }}</td>
                            <td>{{ $one->city->title_ar }}</td>
                            <td>{{ $one->distance_from_the_haram }}</td>
                            <td>{!! view("admin.hotels.data_table", compact("one")) !!}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> عمليات
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="{!! url('/admin/hotels/edit/'.$one->id) !!}">
                                                <i class="icon-docs"></i> تعديل </a>
                                        </li>
                                        <li>
                                            <a class="delete_link" data-id="{!! $one->id !!}" href="{!! url('/admin/hotels/delete/'.$one->id) !!}">
                                                <i class="icon-tag"></i> حذف </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a    href="{!! url('/admin/hotels/slider/'.$one->id) !!}">
                                                <i class="icon-flag"></i> السلايدر </a>
                                        </li>
                                        <li>
                                            <a    href="{!! url('/admin/hotels/rooms/'.$one->id) !!}">
                                                <i class="icon-flag"></i> الغرف والأسعار </a>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @php($i++)
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
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
{!! HTML::script('assets/pages/scripts/table-datatables-responsive.min.js') !!}
{!! HTML::script('assets/pages/scripts/files/general.js') !!}
{!! HTML::script('assets/pages/scripts/ui-toastr.min.js') !!}
@stop




