<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    public function exec_dates()
    {
        return $this->hasMany('App\Models\ExecDate');
    }

    protected $fillable = [
        'user_id',
        'title',
    ];
}
