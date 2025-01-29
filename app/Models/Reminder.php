<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;
    protected $table = 'reminders';
    protected $fillable = ['task_id', 'message', 'remind_at'];
    protected $dates = ['remind_at'];
    public $timestamps = true;

    public function task() {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
