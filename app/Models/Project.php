<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

public function tasks()
{
    return $this->hasMany(Task::class);
}
}
