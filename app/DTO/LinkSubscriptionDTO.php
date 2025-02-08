<?php



namespace App\DTO;

use App\Http\Requests\LinkSubscriptionRequest;
readonly class LinkSubscriptionDTO
{

    public function __construct(
        public? string $subscriptionId,
        public? string $memberId,

    ) {}

    public static function fromRequest(LinkSubscriptionRequest $request): self
    {
        return new self(
            subscriptionId : $request->get('subscriptionId'),
            memberId : $request->get('memberId'),

        );
    }
}