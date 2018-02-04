@extends('admin.app')
@section('title', ' |حجز البرامج')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">تفاصيل حجز برنامج</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <col width="15%" />
                    <col width="85%" />
                    <tr>
                        <th class="all">البرنامج</th>
                        <td>{{ $details->program->title_ar }}</td>
                    </tr>
                    <tr>
                        <th class="all">الجنسية</th>
                        <td>{{ $details->nationality->title_ar }}</td>
                    </tr>
                    <tr>
                        <th class="all">التاريخ</th>
                        <td>{{ $details->date_id }}</td>
                    </tr>
                    <tr>
                        <th class="all">الإسم</th>
                        <td>{{ $details->name }}</td>
                    </tr>
                    <tr>
                        <th class="all">البريد الإلكترونى</th>
                        <td>{{ $details->email }}</td>
                    </tr>
                    <tr>
                        <th class="all">رقم التليفون</th>
                        <td>{{ $details->phone }}</td>
                    </tr>
                    <tr>
                        <th class="all">رقم التليفون</th>
                        <td>{{ $details->phone }}</td>
                    </tr>
                    <tr>
                        <th class="all">الغرف </th>
                        <td>
                            @foreach($rooms_data as $key => $value)
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <div class="col-md-6">نوع الغرفة</div>
                                    <div class="col-md-6" style="color: #0070a3;">{{ $value['room'] }}</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="col-md-7">عدد الغرف</div>
                                    <div class="col-md-5" style="color: #0070a3;">{{ $value['number'] }}</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-6">بالغين</div>
                                    <div class="col-md-6" style="color: #0070a3;">{{ $value['adults'] }}</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-4">أطفال</div>
                                    <div class="col-md-8" style="color: #0070a3;">
                                        {{ $value['children'] }}
                                    </div>
                                </div>
                                <div class="col-md-2 mb10">
                                    <div class="col-md-4">رضع</div>
                                    <div class="col-md-8" style="color: #0070a3;">
                                        {{ $value['infants'] }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th class="all">ملاحظات</th>
                        <td>{{ $details->notes }}</td>
                    </tr>
                    <tr>
                        <th class="all">تاريخ الأرسال</th>
                        <td>{{ $details->created_at }}</td>
                    </tr>



                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>

</div>
@stop
