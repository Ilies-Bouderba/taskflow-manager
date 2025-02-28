<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notification';
    protected $fillable = ['user_id', 'message', 'read_at'];
    protected $dates = ['read_at'];
    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
