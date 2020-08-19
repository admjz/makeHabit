<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habit extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function executions()
    {
        return $this->hasMany('App\Models\Execution');
    }

    protected $fillable = [
        'user_id',
        'title',
    ];
}
