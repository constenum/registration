<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Relationship extends Model
{
    use SoftDeletes;

    public function relatives() {
        return $this->hasMany('App\Student');
    }

    public function guardians() {
        return $this->hasMany('App\Guardian');
    }
}
