<?php



namespace App\DTO;

use App\Http\Requests\UserRequest;
readonly class UserDTO
{

    public function __construct(
        public? string $role_id,
        public? string $password,

    ) {}

    public static function fromRequest(UserRequest $request): self
    {
        return new self(
            role_id : $request->get('role_id'),
            password : $request->get('password'),

        );
    }
}
