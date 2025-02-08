<?php

namespace App\Services;

use App\Models\Role;
use App\DTO\RoleDTO;

class RoleService
{
    public function getAll()
    {
        return Role::all();
    }

    public function create(RoleDTO $dto)
    {
        return Role::create((array) $dto);
    }

    public function find($id)
    {
        return Role::findOrFail($id);
    }

    public function update(Role $role, RoleDTO $dto)
    {
        $role->update((array) $dto);
        return $role;
    }

    public function delete(Role $role)
    {
        return $role->delete();
    }
}