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

    public function saveExecution($inputs)
    {
        return $this->fill($inputs)->save();
    }

    public function findExecution($executionId)
    {
        return $this->find($executionId);
    }

    public function updateExecution($executionId, $inputs)
    {
        return $this->find($executionId)->fill($inputs)->save();
    }

    public function deleteExecution($executionId)
    {
        return $this->find($executionId)->delete();
    }
