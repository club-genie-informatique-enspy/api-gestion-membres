<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasUuids;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['name', 'surname', 'email', 'phone', 'dateOfBirth', 'department_id', 'level', 'organization_id'];

    /** @use HasFactory<\Database\Factories\MemberFactory> */
    use HasFactory;
}
