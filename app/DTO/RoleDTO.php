<?php



namespace App\DTO;

use App\Http\Requests\RoleRequest;
readonly class RoleDTO
{

    public function __construct(
        public? string $name,

    ) {}

    public static function fromRequest(RoleRequest $request): self
    {
        return new self(
            name : $request->get('name'),

        );
    }
}