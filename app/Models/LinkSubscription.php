<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkSubscription extends Model
{
    protected $fillable = ['subscriptionId', 'memberId'];

    /** @use HasFactory<\Database\Factories\LinkSubscriptionFactory> */
    use HasFactory;
}
