<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programdate extends Model {

    public $table = "programdates";

    public function nationality() {
        return $this->belongsTo("App\Nationality", "nationality_id");
    }

    public function currency() {
        return $this->belongsTo("App\Currency", "currency_id");
    }

    public function program() {
        return $this->belongsTo("App\Program", "program_id");
    }

}
