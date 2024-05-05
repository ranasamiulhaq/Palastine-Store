<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_signup extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'users';
    protected $fillable = ['name', 'phone', 'cnic', 'email', 'password', 'address'];

}
