<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meeting extends Model
{
    use HasUuids;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['label', 'description', 'date', 'duration', 'owner', 'user_id'];

    /** @use HasFactory<\Database\Factories\MeetingFactory> */
    use HasFactory;
}
