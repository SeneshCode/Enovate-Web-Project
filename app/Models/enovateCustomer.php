<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enovateCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'c_name',
        'email',
        'c_number',
        'subject',
        'message'
    ];
}
