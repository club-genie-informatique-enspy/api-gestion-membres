<?php



namespace App\DTO;

use App\Http\Requests\LinkMeetingRequest;
readonly class LinkMeetingDTO
{

    public function __construct(
        public? string $subscriptionId,
        public? string $memberId,

    ) {}

    public static function fromRequest(LinkMeetingRequest $request): self
    {
        return new self(
            subscriptionId : $request->get('subscriptionId'),
            memberId : $request->get('memberId'),

        );
    }
}