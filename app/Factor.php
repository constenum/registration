<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Factor extends Model
{
    use Notifiable, SoftDeletes;

    /* Relationship Method */

    /**
     * Each factor belongs to many students
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
        'factor',
    ];
}
