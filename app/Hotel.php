<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model {

    public $table = "hotels";

    public function city() {
        return $this->belongsTo("App\City", "city_id");
    }

    public function country() {
        return $this->belongsTo("App\Country", "country_id");
    }

    public function slider() {
        return $this->hasMany("App\Hotelslider", "hotel_id");
    }

    public function rooms() {
        return $this->belongsToMany("App\Room", 'hotels_rooms', 'hotel_id', 'room_id');
    }

}
