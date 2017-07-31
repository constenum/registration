<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guardian extends Model
{
    use SoftDeletes;

    public function students() {
        return $this->belongsToMany('App\Student')
            ->withTimestamps();
    }

    public function households() {
        return $this->belongsTo('App\Household');
    }

    public function relationships() {
        return $this->belongsTo('App\Relationship');
    }
}
