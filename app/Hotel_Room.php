<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_Room extends Model {

    public $table = "hotels_rooms";

    public function rooms() {
        return $this->belongsToMany("App\Room");
    }

    public function hotels() {
        return $this->belongsToMany("App\Hotel");
    }

    public function currency() {
        return $this->belongsTo("App\Currency", "currency_id");
    }

}
