<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model {

    public $table = "agents";

    public function country() {
        return $this->belongsTo("App\Country", "country_id");
    }

}
