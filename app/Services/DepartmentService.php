<?php

namespace App\Services;

use App\Models\Department;
use App\DTO\DepartmentDTO;

class DepartmentService
{
    public function getAll()
    {
        return Department::all();
    }

    public function create(DepartmentDTO $dto)
    {
        return Department::create((array) $dto);
    }

    public function find($id)
    {
        return Department::findOrFail($id);
    }

    public function update(Department $department, DepartmentDTO $dto)
    {
        $department->update((array) $dto);
        return $department;
    }

    public function delete(Department $department)
    {
        return $department->delete();
    }
}