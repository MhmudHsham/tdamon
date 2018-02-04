<?php

namespace App;

/**
 * Description of MakeUmrah
 *
 * @author mhmudhsham
 */
use Illuminate\Database\Eloquent\Model;

class MakeUmrah extends Model {

    public $table = "make_your_umrah";

    public function season() {
        return $this->belongsTo("App\Category", "season_id");
    }

}
