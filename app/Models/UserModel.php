<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
        'phone_no'
    ];
}
