<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enovateUsers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'email',
        'avatar',
        'msg',
        'created_at'
    ];
}
