<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sightseeing extends Model {

    public $table = "sightseeing";

    public function city() {
        return $this->belongsTo("App\City", "city_id");
    }

}
