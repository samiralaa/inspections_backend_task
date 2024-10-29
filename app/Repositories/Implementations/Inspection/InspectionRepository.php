<?php

namespace App\Repositories\Implementations\Inspection;

use App\Models\Inspection;
use App\Repositories\Interfaces\Inspection\InspectionRepositoryInterface;
use Illuminate\Support\Collection;

class InspectionRepository implements InspectionRepositoryInterface
{
    public function all(): Collection
    {
        return Inspection::all();
    }

    public function find($id): ?Inspection
    {
        return Inspection::find($id);
    }

    public function create(array $data): Inspection
    {
        return Inspection::create($data);
    }

    public function update($id, array $data): bool
    {
        $inspection = $this->find($id);
        return $inspection ? $inspection->update($data) : false;
    }

    public function delete($id): bool
    {
        $inspection = $this->find($id);
        return $inspection ? $inspection->delete() : false;
    }
}
