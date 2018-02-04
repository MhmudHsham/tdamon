@extends('admin.app')
@section('title', ' | طلبات صمم عمرتك')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">تفاصيل طلب صمم عمرتك</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <col width="15%" />
                    <col width="85%" />
                    <tr>
                        <th class="all">نوع الحجز</th>
                        <td>{{ $details->type }}</td>
                    </tr>
                    <tr>
                        <th class="all">الموسم</th>
                        <td>{{ $details->season->title_ar }}</td>
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
                        <th class="all">فندق مكة</th>
                        <td>{{ $details->makka_hotel }}</td>
                    </tr>
                    <tr>
                        <th class="all">عدد ليالي مكة</th>
                        <td>{{ $details->makka_nights }}</td>
                    </tr>
                    <tr>
                        <th class="all">فندق المدينة</th>
                        <td>{{ $details->madina_hotel }}</td>
                    </tr>
                    <tr>
                        <th class="all">عدد ليالي المدينة</th>
                        <td>{{ $details->madina_nights }}</td>
                    </tr>
                    <tr>
                        <th class="all">الخدمات</th>
                        <td>
                            @if($services)
                            @foreach($services as $key => $one)
                            {{ $key }} &nbsp; &nbsp; <img src="{{ asset($one) }}" style="width: 25px;height: 25px;" />&nbsp; &nbsp; &nbsp;
                            @endforeach
                            @endif
                        </td>
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
                                        @if($value['children'] == null)
                                        لا يوجد
                                        @else
                                        {{ $value['children'] }}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2 mb10">
                                    <div class="col-md-4">رضع</div>
                                    <div class="col-md-8" style="color: #0070a3;">
                                        @if($value['infants'] == null)
                                        لا يوجد
                                        @else
                                        {{ $value['infants'] }}
                                        @endif
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
