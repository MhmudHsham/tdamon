<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Currency
 *
 * @author mhmudhsham
 */
class Currency extends Model {

    public $table = "currencies";

    public function currency() {
        return $this->hasMany("App\Program", "currency_id");
    }

}
