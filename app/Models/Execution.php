<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Execution extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function habit()
    {
        return $this->belongsTo('App\Models\Habit');
    }

    protected $fillable = [
        'habit_id',
        'contents',
    ];
}
