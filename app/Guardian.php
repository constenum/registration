<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Guardian extends Model
{
    use Notifiable, SoftDeletes;

    /* Relationship Methods */

    /**
     * Each guardian belongs to 1 or more students
     */
    public function students() {
        return $this->belongsToMany('App\Student')
            ->withTimestamps();
    }

    /**
     * Each guardian belongs to 1 household
     */
    public function households() {
        return $this->belongsTo('App\Household');
    }

    /**
     * Each guardian has 1 relationship
     */
    public function relationships() {
        return $this->hasOne('App\Relationship');
    }

    /* End Relationship Methods */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'male_female',
        'deceased',
        'deceased_date',
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'maiden_name',
        'email',
        'emergency_phone',
        'cell_phone',
        'allow_text_messages',
        'alumna',
        'religion',
        'church',
        'employed',
        'employer',
        'work_type',
        'work_address',
        'work_city',
        'work_state',
        'work_zip_code',
        'work_phone',
        'allow_calls_to_work',
    ];
}
