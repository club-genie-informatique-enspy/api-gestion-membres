<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use App\Http\Resources\MemberResource;
use App\Services\MemberService;
use App\DTO\MemberDTO;
use Illuminate\Http\Response;

class MemberController extends Controller
{
    //

    private MemberService $service;

    public function __construct(MemberService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $member = $this->service->getAll();
        return MemberResource::collection($member);
    }

    public function store(MemberRequest $request)
    {
        $dto = MemberDTO::fromRequest($request);
        $member = $this->service->create($dto);
        return new MemberResource($member);
    }

    public function show(Member $member)
    {
        return new MemberResource($member);
    }

    public function update(MemberRequest $request, Member $member)
    {
        $dto = MemberDTO::fromRequest($request);
        $updatedMember = $this->service->update($member, $dto);
        return new MemberResource($updatedMember);
    }

    public function destroy(Member $member)
    {
        $this->service->delete($member);
        return response(null, 204);
    }

}
