<?php



namespace App\DTO;

use App\Http\Requests\SubscriptionRequest;
readonly class SubscriptionDTO
{

    public function __construct(
        public? string $label,
        public? string $description,
        public? number $rising,
        public? \DateTimeInterface $startDate,
        public? \DateTimeInterface $endDate,
        public? string $frequency,

    ) {}

    public static function fromRequest(SubscriptionRequest $request): self
    {
        return new self(
            label : $request->get('label'),
            description : $request->get('description'),
            rising : $request->get('rising'),
            startDate : $request->get('startDate'),
            endDate : $request->get('endDate'),
            frequency : $request->get('frequency'),

        );
    }
}