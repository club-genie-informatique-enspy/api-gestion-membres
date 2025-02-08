<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\MeetingRequest;
use App\Models\Meeting;
use App\Http\Resources\MeetingResource;
use App\Services\MeetingService;
use App\DTO\MeetingDTO;
use Illuminate\Http\Response;

class MeetingController extends Controller
{
    //

    private MeetingService $service;

    public function __construct(MeetingService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $meeting = $this->service->getAll();
        return MeetingResource::collection($meeting);
    }

    public function store(MeetingRequest $request)
    {
        $dto = MeetingDTO::fromRequest($request);
        $meeting = $this->service->create($dto);
        return new MeetingResource($meeting);
    }

    public function show(Meeting $meeting)
    {
        return new MeetingResource($meeting);
    }

    public function update(MeetingRequest $request, Meeting $meeting)
    {
        $dto = MeetingDTO::fromRequest($request);
        $updatedMeeting = $this->service->update($meeting, $dto);
        return new MeetingResource($updatedMeeting);
    }

    public function destroy(Meeting $meeting)
    {
        $this->service->delete($meeting);
        return response(null, 204);
    }

}
