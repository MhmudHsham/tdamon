<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    public $table = "countries";

    public function agents() {
        return $this->hasMany("App\Agent", "country_id");
    }

    public function cities() {
        return $this->hasMany("App\City", "country_id");
    }

}
