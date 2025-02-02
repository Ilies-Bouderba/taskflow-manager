<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $fillable = [
        "name",
        "description",
        'admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getProgressAttribute()
    {
        $tasks = $this->tasks;

        if ($tasks->count() === 0) {
            return 0;
        }

        $totalProgress = $tasks->sum('progress');
        return round($totalProgress / $tasks->count(), 2);
    }

    public function chat() {
        return $this->hasMany(Chat::class)->orderBy('created_at');
    }
}
