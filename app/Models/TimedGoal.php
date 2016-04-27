<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimedGoal extends Model
{
    use CreatesGoal;

    public $timestamps = false;

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
        return $this->morphOne('App\Models\Goal', 'type');
    }
}
