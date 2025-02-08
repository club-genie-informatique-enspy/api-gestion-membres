<?php



namespace App\DTO;

use App\Http\Requests\OrganizationRequest;
readonly class OrganizationDTO
{

    public function __construct(
        public? string $name,
        public? string $password,
        public? string $emailAddress,

    ) {}

    public static function fromRequest(OrganizationRequest $request): self
    {
        return new self(
            name : $request->get('name'),
            password : $request->get('password'),
            emailAddress : $request->get('emailAddress'),

        );
    }
}