<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Http\Resources\RoleResource;
use App\Services\RoleService;
use App\DTO\RoleDTO;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    //

    private RoleService $service;

    public function __construct(RoleService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $role = $this->service->getAll();
        return RoleResource::collection($role);
    }

    public function store(RoleRequest $request)
    {
        $dto = RoleDTO::fromRequest($request);
        $role = $this->service->create($dto);
        return new RoleResource($role);
    }

    public function show(Role $role)
    {
        return new RoleResource($role);
    }

    public function update(RoleRequest $request, Role $role)
    {
        $dto = RoleDTO::fromRequest($request);
        $updatedRole = $this->service->update($role, $dto);
        return new RoleResource($updatedRole);
    }

    public function destroy(Role $role)
    {
        $this->service->delete($role);
        return response(null, 204);
    }

}
