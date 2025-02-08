<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\LinkSubscriptionRequest;
use App\Models\LinkSubscription;
use App\Http\Resources\LinkSubscriptionResource;
use App\Services\LinkSubscriptionService;
use App\DTO\LinkSubscriptionDTO;
use Illuminate\Http\Response;

class LinkSubscriptionController extends Controller
{
    //

    private LinkSubscriptionService $service;

    public function __construct(LinkSubscriptionService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $linksubscription = $this->service->getAll();
        return LinkSubscriptionResource::collection($linksubscription);
    }

    public function store(LinkSubscriptionRequest $request)
    {
        $dto = LinkSubscriptionDTO::fromRequest($request);
        $linksubscription = $this->service->create($dto);
        return new LinkSubscriptionResource($linksubscription);
    }

    public function show(LinkSubscription $linksubscription)
    {
        return new LinkSubscriptionResource($linksubscription);
    }

    public function update(LinkSubscriptionRequest $request, LinkSubscription $linksubscription)
    {
        $dto = LinkSubscriptionDTO::fromRequest($request);
        $updatedLinkSubscription = $this->service->update($linksubscription, $dto);
        return new LinkSubscriptionResource($updatedLinkSubscription);
    }

    public function destroy(LinkSubscription $linksubscription)
    {
        $this->service->delete($linksubscription);
        return response(null, 204);
    }

}
