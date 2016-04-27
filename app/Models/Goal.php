<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'private', 'owner_id', 'category',
        'id', // TODO REMOVE ONCE GOALS ARE DB BACKED
    ];
    

    public function type()
    {
        return $this->morphTo();
    }

    public function owner()
    {
        return $this->belongsTo('App\Models\User', 'owner_id');
    }
}
