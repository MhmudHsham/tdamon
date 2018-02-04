<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programslider extends Model {

    public $table = "programsliders";

    public function slider() {
        return $this->belongsTo("App\Program", "program_id");
    }

}
