<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habit extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'title',
    ];

    public function executions()
    {
        return $this->hasMany('App\Models\Execution');
    }

    public function getHabits($currentUserId)
    {
        return $this->where('user_id', $currentUserId)->orderBy('created_at', 'desc')->get();
    }

    public function saveHabit($inputs)
    {
        return $this->fill($inputs)->save();
    }

    public function findHabit($habitId)
    {
        return $this->find($habitId);
    }

    public function updateHabit($habitId, $inputs)
    {
        return $this->find($habitId)->fill($inputs)->save();
    }

    public function deleteHabit($habitId)
    {
        return $this->find($habitId)->delete();
    }

    public function findExecution($habitId)
    {
        return $this->find($habitId)->executions->sortByDesc('created_at');
    }
}
