<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public function questions()
    {
        return $this->belongsTo('App\Models\Question');
    }

    public function answer()
    {
        return $this->hasOne('App\Models\Answer');
    }
}
