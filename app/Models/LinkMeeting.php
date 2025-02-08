<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LinkMeeting extends Model
{
    use HasUuids;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['subscription_id', 'member_id'];

    /** @use HasFactory<\Database\Factories\LinkMeetingFactory> */
    use HasFactory;
}
