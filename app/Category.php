<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public $table = "categories";

    public function programs() {
        return $this->hasMany("App\Program", "category_id");
    }

}
