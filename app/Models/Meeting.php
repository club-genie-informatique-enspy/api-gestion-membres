<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['label', 'description', 'date', 'duration', 'owner', 'userId'];

    /** @use HasFactory<\Database\Factories\MeetingFactory> */
    use HasFactory;
}
