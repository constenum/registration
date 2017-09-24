<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Relative extends Model
{
    use SoftDeletes;

    /* Relationship Methods */

    public function relationships() {
        return $this->belongsTo('App\Relationship');
    }

    public function students() {
        return $this->belongsToMany('App\Student')
            ->withTimestamps();
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
