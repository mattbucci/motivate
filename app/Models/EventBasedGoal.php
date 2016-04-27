<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventBasedGoal extends Model
{
    use CreatesGoal;
    
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total_events'
    ];

    public function goal()
    {
        return $this->morphTo('App\Models\Goal', 'type');
    }
}
