<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    public function guardians() {
        return $this->belongsToMany('App\Guardian')
            ->withTimestamps();
    }

    public function relatives() {
        return $this->belongsToMany('App\Relative')
            ->withTimestamps();
    }

    public function activities() {
        return $this->belongsToMany('App\Activity')
            ->withPivot('instrument', 'currentlyPlay', 'continueToPlay')
            ->withTimestamps();
    }

    public function decisions() {
        return $this->belongsTo('App\Decision');
    }

    public function factors() {
        return $this->belongsToMany('App\Factor')
            ->withPivot('otherFactor')
            ->withTimestamps();
    }

    public function about() {
        return $this->belongsToMany('App\About')
            ->withPivot('otherAbout')
            ->withTimestamps();
    }

    public function sports() {
        return $this->belongsToMany('App\Sport')
            ->withTimestamps();
    }
}
