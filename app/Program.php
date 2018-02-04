<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model {

    public $table = "programs";

    public function country() {
        return $this->belongsTo("App\Country", "country_id");
    }

    public function city() {
        return $this->belongsTo("App\City", "city_id");
    }

    public function slider() {
        return $this->hasMany("App\Programslider", "program_id");
    }

    public function category() {
        return $this->belongsTo("App\Category", "category_id");
    }

    public function dates() {
        return $this->hasMany("App\Programdate", "program_id");
    }

}
