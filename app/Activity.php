<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Activity extends Model
{
    use Notifiable, SoftDeletes;

    /* Relationship Method */

    /**
     * Each activity belongs to 0, 1 or more students
     */
    public function students() {
        return $this->belongsToMany('App\Student')
            ->withTimestamps();
    }

    /* End Relationship Method */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activity',
    ];
}
