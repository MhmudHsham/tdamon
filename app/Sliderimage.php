<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliderimage extends Model {

    public $table = "sliderimages";

    public function slider() {
        return $this->belongsTo("App\Slider", "slider_id");
    }

}
