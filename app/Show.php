<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $table = "show";

    public function clasification()
    {
        return $this->belongsTo('App\Clasification');
    }

    public function timetables()
    {
        return $this->hasMany('App\Timetable');
    }
}
