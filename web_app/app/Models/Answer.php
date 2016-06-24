<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function options()
    {
        return $this->belongsTo('App\Models\Option');
    }
}
