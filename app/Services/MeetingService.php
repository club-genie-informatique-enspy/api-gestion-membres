<?php

namespace App\Services;

use App\Models\Meeting;
use App\DTO\MeetingDTO;

class MeetingService
{
    public function getAll()
    {
        return Meeting::all();
    }

    public function create(MeetingDTO $dto)
    {
        return Meeting::create((array) $dto);
    }

    public function find($id)
    {
        return Meeting::findOrFail($id);
    }

    public function update(Meeting $meeting, MeetingDTO $dto)
    {
        $meeting->update((array) $dto);
        return $meeting;
    }

    public function delete(Meeting $meeting)
    {
        return $meeting->delete();
    }
}