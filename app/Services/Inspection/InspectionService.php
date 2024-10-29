<?php

namespace App\Services\Inspection;

use App\Repositories\Interfaces\Inspection\InspectionRepositoryInterface;
use App\Models\Inspection;

class InspectionService
{
    protected $inspectionRepository;

    public function __construct(InspectionRepositoryInterface $inspectionRepository)
    {
        $this->inspectionRepository = $inspectionRepository;
    }

    public function getAllInspections()
    {
        return $this->inspectionRepository->all();
    }

    public function getInspection($id): ?Inspection
    {
        return $this->inspectionRepository->find($id);
    }

    public function createInspection(array $data): Inspection
    {
        return $this->inspectionRepository->create($data);
    }

    public function updateInspection($id, array $data): bool
    {
        return $this->inspectionRepository->update($id, $data);
    }

    public function deleteInspection($id): bool
    {
        return $this->inspectionRepository->delete($id);
    }
}