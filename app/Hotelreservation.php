<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Hotelreservation
 *
 * @author mhmudhsham
 */
class Hotelreservation extends Model {

    public $table = "hotelreservations";

    public function hotel() {
        return $this->belongsTo("App\Hotel", "hotel_id");
    }

}
