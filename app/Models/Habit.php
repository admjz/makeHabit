<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    public function executions()
    {
        return $this->hasMany('App\Models\Execution');
    }

    protected $fillable = [
        'user_id',
        'title',
    ];
}
