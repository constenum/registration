<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Decision extends Model
{
    use Notifiable, SoftDeletes;

    /* Relationship Method */

    /**
     * Each decision belongs to 0, 1 or more students
     */
    public function students() {
        return $this->belongsToMany('App\Student');
    }

    /* end Relationship Method */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'decision',
    ];

    /**
     * Create dropdown to show decisions.
     */
    public static function getDecisionDropdown() {

        $decisions = Decision::orderBy('decision', 'ASC')->get();

        $decisions_for_dropdown = [];
        foreach($decisions as $decision) {
            $decisions_for_dropdown[$decision->id] = $decision->decision;
        }

        return $decisions_for_dropdown;
    }
}