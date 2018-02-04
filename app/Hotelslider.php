<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotelslider extends Model {

    public $table = "hotelsliders";

    public function slider() {
        return $this->belongsTo("App\Hotel", "hotel_id");
    }

}
