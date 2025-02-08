<?php



namespace App\DTO;

use App\Http\Requests\MemberRequest;
readonly class MemberDTO
{

    public function __construct(
        public? string $name,
        public? string $surname,
        public? string $email,
        public? string $phone,
        public? \DateTimeInterface $dateOfBirth,
        public? string $departmentId,
        public? string $level,
        public? string $organizationId,

    ) {}

    public static function fromRequest(MemberRequest $request): self
    {
        return new self(
            name : $request->get('name'),
            surname : $request->get('surname'),
            email : $request->get('email'),
            phone : $request->get('phone'),
            dateOfBirth : $request->get('dateOfBirth'),
            departmentId : $request->get('departmentId'),
            level : $request->get('level'),
            organizationId : $request->get('organizationId'),

        );
    }
}