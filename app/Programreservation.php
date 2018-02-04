<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Programreservation
 *
 * @author mhmudhsham
 */
class Programreservation extends Model {

    public $table = "programreservations";

    public function program() {
        return $this->belongsTo("App\Program", "program_id");
    }

    public function nationality() {
        return $this->belongsTo("App\Nationality", "nationality_id");
    }

}
