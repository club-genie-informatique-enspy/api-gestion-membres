<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['roleId', 'password'];

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
}
