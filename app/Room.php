<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

    public $table = "rooms";

    public function hotels() {
        return $this->belongsToMany("App\Hotel", 'hotels_rooms', 'hotel_id', 'room_id')->withPivot('price', 'end_date', 'start_date');
    }

}
