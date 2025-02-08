<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['name', 'password', 'emailAddress'];

    /** @use HasFactory<\Database\Factories\OrganizationFactory> */
    use HasFactory;
}
