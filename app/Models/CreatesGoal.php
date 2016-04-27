<?php

namespace App\Models;

trait CreatesGoal
{
    public static function create(array $attributes = [])
    {
        $model = parent::create($attributes);
        $model->goal()->create($attributes);
        return $model;
    }
}
