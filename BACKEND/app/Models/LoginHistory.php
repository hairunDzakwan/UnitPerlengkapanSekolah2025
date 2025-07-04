<?php
// app/Models/LoginHistory.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginHistory extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'login_time', 'ip_address'];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
