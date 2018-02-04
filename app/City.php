<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    public $table = "cities";

    public function country() {
        return $this->belongsTo("App\Country", "country_id");
    }

    public function sighseeing() {
        return $this->hasMany("App\Sightseeing", "city_id");
    }

}
