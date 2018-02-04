<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {

    public $table = "hotelreservations";

    public function hotel() {
        return $this->belongsTo("App\Hotel", "hotel_id");
    }

    public function room() {
        return $this->belongsTo("App\Room", 'room_id');
    }

}
