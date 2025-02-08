<?php

namespace App\Services;

use App\Models\LinkSubscription;
use App\DTO\LinkSubscriptionDTO;

class LinkSubscriptionService
{
    public function getAll()
    {
        return LinkSubscription::all();
    }

    public function create(LinkSubscriptionDTO $dto)
    {
        return LinkSubscription::create((array) $dto);
    }

    public function find($id)
    {
        return LinkSubscription::findOrFail($id);
    }

    public function update(LinkSubscription $linksubscription, LinkSubscriptionDTO $dto)
    {
        $linksubscription->update((array) $dto);
        return $linksubscription;
    }

    public function delete(LinkSubscription $linksubscription)
    {
        return $linksubscription->delete();
    }
}