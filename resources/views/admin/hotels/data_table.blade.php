<div class="data_table_style">
    <div class="row">
        <div class=" col-md-3 col-lg-3 col-sm-6 col-xs-6">
            {{ $one->title_ar }}
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            {{ $one->city->title_ar }}
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            {{ $one->country->title_ar }}
        </div>
        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
            <img src="{{ asset($one->image) }}" style="width: 80px;height: 80px;" />
        </div>
    </div>

    <div style="display: none;">
        {!! $data = \App\Hotel_Room::with("currency")->where("hotel_id", $one->id)->get(); !!}
    </div>
    @if(!$data->isEmpty())
    <hr style="border-top: 1px solid #36c6d3;" />

    <div class="row">
        <div class=" col-md-4 col-lg-4 col-sm-6 col-xs-6">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
                <p class="labels">
                    الأسعار <i class="fa fa-money" aria-hidden="true"></i>
                </p>
            </div>
            <div class=" col-md-8 col-lg-8 col-sm-6 col-xs-6">
                @foreach($data as $value)
                <div><i class="labels fa fa-angle-double-left" aria-hidden="true"></i> {{ $value->price }} {{ $value->currency->title_ar }}</div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
                <p class="labels">
                    من تاريخ  <i class="fa fa-calendar" aria-hidden="true"></i>
                </p>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                @foreach($data as $value)
                <div><i class="labels fa fa-angle-double-left" aria-hidden="true"></i> {{$value->start_date}} </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                <p class="labels">
                    إلى تاريخ <i class="fa fa-calendar" aria-hidden="true"></i>
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                @foreach($data as $value)
                <div><i class="labels fa fa-angle-double-left" aria-hidden="true"></i> {{$value->end_date}}</div>
                @endforeach
            </div>
        </div>

    </div>
    @endif
</div>