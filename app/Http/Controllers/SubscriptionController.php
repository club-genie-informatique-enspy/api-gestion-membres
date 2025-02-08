<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\SubscriptionRequest;
use App\Models\Subscription;
use App\Http\Resources\SubscriptionResource;
use App\Services\SubscriptionService;
use App\DTO\SubscriptionDTO;
use Illuminate\Http\Response;

class SubscriptionController extends Controller
{
    //

    private SubscriptionService $service;

    public function __construct(SubscriptionService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $subscription = $this->service->getAll();
        return SubscriptionResource::collection($subscription);
    }

    public function store(SubscriptionRequest $request)
    {
        $dto = SubscriptionDTO::fromRequest($request);
        $subscription = $this->service->create($dto);
        return new SubscriptionResource($subscription);
    }

    public function show(Subscription $subscription)
    {
        return new SubscriptionResource($subscription);
    }

    public function update(SubscriptionRequest $request, Subscription $subscription)
    {
        $dto = SubscriptionDTO::fromRequest($request);
        $updatedSubscription = $this->service->update($subscription, $dto);
        return new SubscriptionResource($updatedSubscription);
    }

    public function destroy(Subscription $subscription)
    {
        $this->service->delete($subscription);
        return response(null, 204);
    }

}
