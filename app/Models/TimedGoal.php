<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimedGoal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'repeats', 'duration'
    ];

    public function goal()
    {
        return $this->morphTo('App\Models\Goal', 'type');
    }
}
