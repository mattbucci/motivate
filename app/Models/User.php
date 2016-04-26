<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $guarded = [
        'points',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function goals()
    {
        return $this->belongsToMany('App\Models\Goal')
            ->withPivot('progress', 'difficulty', 'rating', 'accomplished')
            ->wherePivot('accomplished', '=', false);
    }

    public function accomplishedGoals()
    {
        return $this->belongsToMany('App\Models\Goal')
            ->withPivot('progress', 'difficulty', 'rating', 'accomplished')
            ->wherePivot('accomplished', '=', true);
    }

    public function rewards()
    {
        return $this->belongsToMany('App\Models\Reward')
            ->withPivot('rating', 'claimed')
            ->wherePivot('claimed', '=', false);
    }

    public function claimedRewards()
    {
        return $this->belongsToMany('App\Models\Reward')
            ->withPivot('rating', 'claimed')
            ->wherePivot('claimed', '=', true);
    }
}
