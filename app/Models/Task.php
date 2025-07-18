<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    //

    protected $fillable = [
        'title',
        'descreiption',
        'project_id',
        'assigned_to',
        'completed',
    ];
    public function project () {
        return $this->belongsTo(Project::class);
    }

    public function assigned_To()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
