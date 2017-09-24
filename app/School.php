<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class School extends Model
{
    use Notifiable, SoftDeletes;

    /* Relationship Method */

    /**
     * Each decision has many students
     */
    public function students() {
        return $this->hasMany('App\Student');
    }

    /* end Relationship Method */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school', 'city',
    ];

    /**
     * Create dropdown to show school.
     */
    public static function getSchoolDropdown() {

        $schools = School::orderBy('school', 'ASC')->get();

        $schools_for_dropdown = [];
        foreach($schools as $school) {
            $schools_for_dropdown[$school->id] = $school->school . ' (' . $school->city . ')';
        }

        return $schools_for_dropdown;
    }
}
