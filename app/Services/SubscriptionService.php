<?php

namespace App\Services;

use App\Models\Subscription;
use App\DTO\SubscriptionDTO;

class SubscriptionService
{
    public function getAll()
    {
        return Subscription::all();
    }

    public function create(SubscriptionDTO $dto)
    {
        return Subscription::create((array) $dto);
    }

    public function find($id)
    {
        return Subscription::findOrFail($id);
    }

    public function update(Subscription $subscription, SubscriptionDTO $dto)
    {
        $subscription->update((array) $dto);
        return $subscription;
    }

    public function delete(Subscription $subscription)
    {
        return $subscription->delete();
    }
}