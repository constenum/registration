<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Relationship extends Model
{
    use Notifiable, SoftDeletes;

    /* Relationship Methods */

    /**
     * Each relationship belongs to 1 or more guardians
     */
    public function relatives() {
        return $this->belongsTo('App\Student');
    }

    /**
     * Each relationship belongs to  1 or more guardians
     */
    public function guardians() {
        return $this->belongsTo('App\Guardian');
    }

    /* End Relationship Methods */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'relationship',
    ];
}
