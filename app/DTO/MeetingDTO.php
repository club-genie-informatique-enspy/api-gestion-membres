<?php



namespace App\DTO;

use App\Http\Requests\MeetingRequest;
readonly class MeetingDTO
{

    public function __construct(
        public? string $label,
        public? string $description,
        public? \DateTimeInterface $date,
        public? number $duration,
        public? string $owner,
        public? string $userId,

    ) {}

    public static function fromRequest(MeetingRequest $request): self
    {
        return new self(
            label : $request->get('label'),
            description : $request->get('description'),
            date : $request->get('date'),
            duration : $request->get('duration'),
            owner : $request->get('owner'),
            userId : $request->get('userId'),

        );
    }
}