<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\LinkMeetingRequest;
use App\Models\LinkMeeting;
use App\Http\Resources\LinkMeetingResource;
use App\Services\LinkMeetingService;
use App\DTO\LinkMeetingDTO;
use Illuminate\Http\Response;

class LinkMeetingController extends Controller
{
    //

    private LinkMeetingService $service;

    public function __construct(LinkMeetingService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $linkmeeting = $this->service->getAll();
        return LinkMeetingResource::collection($linkmeeting);
    }

    public function store(LinkMeetingRequest $request)
    {
        $dto = LinkMeetingDTO::fromRequest($request);
        $linkmeeting = $this->service->create($dto);
        return new LinkMeetingResource($linkmeeting);
    }

    public function show(LinkMeeting $linkmeeting)
    {
        return new LinkMeetingResource($linkmeeting);
    }

    public function update(LinkMeetingRequest $request, LinkMeeting $linkmeeting)
    {
        $dto = LinkMeetingDTO::fromRequest($request);
        $updatedLinkMeeting = $this->service->update($linkmeeting, $dto);
        return new LinkMeetingResource($updatedLinkMeeting);
    }

    public function destroy(LinkMeeting $linkmeeting)
    {
        $this->service->delete($linkmeeting);
        return response(null, 204);
    }

}
