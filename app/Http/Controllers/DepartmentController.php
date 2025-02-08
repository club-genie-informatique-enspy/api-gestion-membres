<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use App\Http\Resources\DepartmentResource;
use App\Services\DepartmentService;
use App\DTO\DepartmentDTO;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{
    //

    private DepartmentService $service;

    public function __construct(DepartmentService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $department = $this->service->getAll();
        return DepartmentResource::collection($department);
    }

    public function store(DepartmentRequest $request)
    {
        $dto = DepartmentDTO::fromRequest($request);
        $department = $this->service->create($dto);
        return new DepartmentResource($department);
    }

    public function show(Department $department)
    {
        return new DepartmentResource($department);
    }

    public function update(DepartmentRequest $request, Department $department)
    {
        $dto = DepartmentDTO::fromRequest($request);
        $updatedDepartment = $this->service->update($department, $dto);
        return new DepartmentResource($updatedDepartment);
    }

    public function destroy(Department $department)
    {
        $this->service->delete($department);
        return response(null, 204);
    }

}
