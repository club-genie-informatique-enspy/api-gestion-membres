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
        public? string $department_id,
        public? string $level,
        public? string $organization_id,

    ) {}

    public static function fromRequest(MemberRequest $request): self
    {
        return new self(
            name : $request->get('name'),
            surname : $request->get('surname'),
            email : $request->get('email'),
            phone : $request->get('phone'),
            dateOfBirth : $request->get('dateOfBirth'),
            department_id : $request->get('department_id'),
            level : $request->get('level'),
            organization_id : $request->get('organization_id'),

        );
    }
}
