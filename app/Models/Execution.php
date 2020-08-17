<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Execution extends Model
{
    public function habit()
    {
        return $this->belongTo('App\Models\Habit');
    }

    protected $fillable = [
        'habit_id',
        'contents',
    ];
}
