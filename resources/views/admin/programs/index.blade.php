@extends('admin.app')
@section('title', ' | كل البرامج')

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
                    <span class="caption-subject bold uppercase">كل البرامج</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="{!! url('/admin/programs/add') !!}" class="btn sbold green" id="sample_1_new">
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
                            <th class="all">إسم الموسم</th>
                            <th class="all">إسم البرنامج</th>
                            <th class="none"></th>
                            <th class="all">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($programs as $one)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $one->category->title_ar }}</td>
                            <td>{{ $one->title_ar }}</td>
                            <td>{!! view("admin.programs.data_table", compact("one")) !!}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> عمليات
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="{!! url('/admin/programs/edit/'.$one->id) !!}">
                                                <i class="icon-docs"></i> تعديل </a>
                                        </li>
                                        <li>
                                            <a class="delete_link" data-id="{!! $one->id !!}" href="{!! url('/admin/programs/delete/'.$one->id) !!}">
                                                <i class="icon-tag"></i> حذف </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a    href="{!! url('/admin/programdates/index/'.$one->id) !!}">
                                                <i class="icon-flag"></i> الأسعار والتواريخ </a>
                                        </li>
                                        <li>
                                            <a    href="{!! url('/admin/programs/slider/'.$one->id) !!}">
                                                <i class="icon-flag"></i> السلايدر </a>
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




