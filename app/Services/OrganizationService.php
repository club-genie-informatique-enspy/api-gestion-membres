<?php

namespace App\Services;

use App\Models\Organization;
use App\DTO\OrganizationDTO;

class OrganizationService
{
    public function getAll()
    {
        return Organization::all();
    }

    public function create(OrganizationDTO $dto)
    {
        return Organization::create((array) $dto);
    }

    public function find($id)
    {
        return Organization::findOrFail($id);
    }

    public function update(Organization $organization, OrganizationDTO $dto)
    {
        $organization->update((array) $dto);
        return $organization;
    }

    public function delete(Organization $organization)
    {
        return $organization->delete();
    }
}