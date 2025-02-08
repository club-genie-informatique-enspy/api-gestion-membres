<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkMeeting extends Model
{
    protected $fillable = ['subscriptionId', 'memberId'];

    /** @use HasFactory<\Database\Factories\LinkMeetingFactory> */
    use HasFactory;
}
