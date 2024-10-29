<?php

namespace App\Repositories\Interfaces\Inspection;

use App\Models\Inspection;
use Illuminate\Support\Collection;

interface InspectionRepositoryInterface
{
    public function all(): Collection;

    public function find($id): ?Inspection;

    public function create(array $data): Inspection;

    public function update($id, array $data): bool;

    public function delete($id): bool;
}
