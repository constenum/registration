<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Household extends Model
{
    use Notifiable, SoftDeletes;

    /* Relationship Method */

    /**
     * Each household has 1 or more guardians
     */
    public function guardians() {
        return $this->hasMany('App\Guardian');
    }

    /* End Relationship Method */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'financially_responsible',
        'student_custody',
        'address',
        'city',
        'state',
        'zip_code',
        'home_phone',
    ];
}
