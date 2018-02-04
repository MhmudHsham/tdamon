<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {

    public $table = "sliders";

    public function images() {
        return $this->hasMany("App\Sliderimage", "slider_id");
    }

}
