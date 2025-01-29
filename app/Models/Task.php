<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'status',
        'priority',
        'project_id',
        'leader_id',
    ];

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function leader() {
        return $this->belongsTo(User::class,'leader_id');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
    }
}
