<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasification extends Model
{
    protected $table = "clasification";

    public function shows()
    {
        return $this->hasMany('App\Show');
    }
}
