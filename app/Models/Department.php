<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasUuids;
    protected $fillable = ['name', 'code'];
    protected $keyType = 'string';
    public $incrementing = false;


    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;
}
