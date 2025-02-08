<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'phone', 'dateOfBirth', 'departmentId', 'level', 'organizationId'];

    /** @use HasFactory<\Database\Factories\MemberFactory> */
    use HasFactory;
}
