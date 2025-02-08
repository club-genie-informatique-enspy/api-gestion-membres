<?php



namespace App\DTO;

use App\Http\Requests\LinkMeetingRequest;
readonly class LinkMeetingDTO
{

    public function __construct(
        public? string $subscription_id,
        public? string $member_id,

    ) {}

    public static function fromRequest(LinkMeetingRequest $request): self
    {
        return new self(
            subscription_id : $request->get('subscription_id'),
            member_id : $request->get('member_id'),

        );
    }
}
