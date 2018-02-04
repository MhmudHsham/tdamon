@extends('admin.app')
@section('title', ' | حجز الفنادق')

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
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">الحجز</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <thead>
                        <tr>
                            <th class="all">#</th>
                            <th class="all">الفندق</th>
                            <th class="all">الإسم</th>
                            <th class="all">البريد الإلكترونى</th>
                            <th class="all">رقم التليفون</th>
                            <th class="all">تاريخ الأرسال</th>
                            <th class="all">التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($reservations as $one)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $one->hotel->title_ar }}</td>
                            <td>{{ $one->name }}</td>
                            <td>{{ $one->email }}</td>
                            <td>{{ $one->phone }}</td>
                            <td>{{ $one->created_at }}</td>
                            <td>
                                <a href="{!! url('/admin/hotels/reserv_details/'.$one->id) !!}">
                                    <i class="icon-eye"></i> عرض التفاصيل </a>
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




