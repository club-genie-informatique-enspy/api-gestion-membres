<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\OrganizationRequest;
use App\Models\Organization;
use App\Http\Resources\OrganizationResource;
use App\Services\OrganizationService;
use App\DTO\OrganizationDTO;
use Illuminate\Http\Response;

class OrganizationController extends Controller
{
    //

    private OrganizationService $service;

    public function __construct(OrganizationService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $organization = $this->service->getAll();
        return OrganizationResource::collection($organization);
    }

    public function store(OrganizationRequest $request)
    {
        $dto = OrganizationDTO::fromRequest($request);
        $organization = $this->service->create($dto);
        return new OrganizationResource($organization);
    }

    public function show(Organization $organization)
    {
        return new OrganizationResource($organization);
    }

    public function update(OrganizationRequest $request, Organization $organization)
    {
        $dto = OrganizationDTO::fromRequest($request);
        $updatedOrganization = $this->service->update($organization, $dto);
        return new OrganizationResource($updatedOrganization);
    }

    public function destroy(Organization $organization)
    {
        $this->service->delete($organization);
        return response(null, 204);
    }

}
