
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <div class="form-group">
        <label>{{ trans("lang.rooms") }}</label>
        <select name="rooms[]" class="form-control rooms">
            <option value="">{{ trans("lang.select_room") }}</option>
            @foreach($rooms as $one)
            <option value="{{ $one->id }}">{{ $one->{$slug->title} }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <div class="form-group">
        <label>{{ trans("lang.number_of_rooms") }}</label>
        <div class="input-group">
            <input type="text" name="number_of_rooms[]" class="form-control" placeholder="{{ trans("lang.number_of_rooms") }}">
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <div class="form-group">
        <label>{{ trans("lang.number_of_adults") }}</label>
        <div class="input-group">
            <input type="text"  name="number_of_adults[]" class="form-control" placeholder="{{ trans("lang.number_of_adults") }}">
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <div class="form-group">
        <label>{{ trans("lang.number_of_children") }}</label>
        <div class="input-group">
            <input type="text"  name="number_of_children[]" class="form-control" placeholder="{{ trans("lang.number_of_children") }}">
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <div class="form-group">
        <label>{{ trans("lang.number_of_infants") }}</label>
        <div class="input-group">
            <input type="text"  name="number_of_infants[]" class="form-control" placeholder="{{ trans("lang.number_of_infants") }}">
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <div class="form-group">
        <label></label>
        <div class="input-group">
            <a href="" class="btn btn-info"  id="add_more" >{{ trans("lang.more") }}</a>
        </div>
    </div>
</div>