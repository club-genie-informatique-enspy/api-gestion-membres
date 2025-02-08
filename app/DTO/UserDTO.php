<?php



namespace App\DTO;

use App\Http\Requests\UserRequest;
readonly class UserDTO
{

    public function __construct(
        public? string $roleId,
        public? string $password,

    ) {}

    public static function fromRequest(UserRequest $request): self
    {
        return new self(
            roleId : $request->get('roleId'),
            password : $request->get('password'),

        );
    }
}