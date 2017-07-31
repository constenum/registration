<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factor extends Model
{
    use SoftDeletes;

    public function students() {
        return $this->belongsToMany('App\Student')
            ->withTimestamps();
    }
}
