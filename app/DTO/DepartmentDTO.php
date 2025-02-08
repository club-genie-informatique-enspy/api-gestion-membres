<?php



namespace App\DTO;

use App\Http\Requests\DepartmentRequest;
readonly class DepartmentDTO
{

    public function __construct(
        public? string $name,
        public? string $code,

    ) {}

    public static function fromRequest(DepartmentRequest $request): self
    {
        return new self(
            name : $request->get('name'),
            code : $request->get('code'),

        );
    }
}