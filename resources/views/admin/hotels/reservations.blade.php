@extends('admin.app')
@section('title', ' | حجز الفنادق')
@section('page_level', 'حجز الفنادق')
@section('styles')
{!! HTML::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! HTML::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}
{!! HTML::style('assets/global/css/components-rtl.min.css') !!}
{!! HTML::style('assets/global/css/plugins-rtl.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-toastr/toastr-rtl.min.css') !!}
@stop


@section('content')
<!--<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal Title</h4>
            </div>
            <div class="modal-body"> Modal body goes here </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green">Save changes</button>
            </div>
        </div>
         /.modal-content
    </div>
     /.modal-dialog
</div>-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> حجز الفنادق</span>
                </div>

            </div>
            <div class="portlet-body">

                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr>

                            <th> # </th>
                            <th> إسم الفندق </th>
                            <th> إسم الغرفة </th>
                            <th> بداية الحجز </th>
                            <th> إنتهاء الحجز </th>
                            <th> التاريخ </th>
                            <!--<th> التفاصيل </th>-->
                        </tr>
                    </thead>
                    <tbody>

                        @php($i = 1)
                        @foreach($reservations as $one)
                        <tr class="odd gradeX tr_{{ $one->id }}">
                            <td> {{ $i }} </td>
                            <td> {{ $one->Hotel->title_ar }} </td>
                            <td> {{ $one->Room->title_ar }} </td>
                            <td> {{ $one->start_date }} </td>
                            <td> {{ $one->end_date }} </td>
                            <td> {{ $one->created_at }} </td>
                            <!--<td><a class="btn red btn-outline sbold" data-toggle="modal" href="#basic"> View Demo </a></td>-->
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
{!! HTML::script('assets/pages/scripts/files/general.js') !!}
{!! HTML::script('assets/pages/scripts/ui-toastr.min.js') !!}
@stop




