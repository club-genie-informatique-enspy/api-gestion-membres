<?php

namespace App\Services;

use App\Models\Member;
use App\DTO\MemberDTO;

class MemberService
{
    public function getAll()
    {
        return Member::all();
    }

    public function create(MemberDTO $dto)
    {
        return Member::create((array) $dto);
    }

    public function find($id)
    {
        return Member::findOrFail($id);
    }

    public function update(Member $member, MemberDTO $dto)
    {
        $member->update((array) $dto);
        return $member;
    }

    public function delete(Member $member)
    {
        return $member->delete();
    }
}