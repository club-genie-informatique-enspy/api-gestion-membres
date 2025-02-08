<?php



namespace App\DTO;

use App\Http\Requests\MeetingRequest;
readonly class MeetingDTO
{

    public function __construct(
        public? string $label,
        public? string $description,
        public? \DateTimeInterface $date,
        public? int $duration,
        public? string $owner,
        public? string $user_id,

    ) {}

    public static function fromRequest(MeetingRequest $request): self
    {
        return new self(
            label : $request->get('label'),
            description : $request->get('description'),
            date : $request->get('date'),
            duration : $request->get('duration'),
            owner : $request->get('owner'),
            user_id : $request->get('user_id'),

        );
    }
}
