<?php

namespace App\Services;

use App\Models\LinkMeeting;
use App\DTO\LinkMeetingDTO;

class LinkMeetingService
{
    public function getAll()
    {
        return LinkMeeting::all();
    }

    public function create(LinkMeetingDTO $dto)
    {
        return LinkMeeting::create((array) $dto);
    }

    public function find($id)
    {
        return LinkMeeting::findOrFail($id);
    }

    public function update(LinkMeeting $linkmeeting, LinkMeetingDTO $dto)
    {
        $linkmeeting->update((array) $dto);
        return $linkmeeting;
    }

    public function delete(LinkMeeting $linkmeeting)
    {
        return $linkmeeting->delete();
    }
}