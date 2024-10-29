<?php

namespace App\Http\Controllers\Inspection;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inspection\StoreInspectionRequest;
use App\Http\Requests\Inspection\UpdateInspectionRequest;
use App\Services\Inspection\InspectionService;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    protected $inspectionService;

    public function __construct(InspectionService $inspectionService)
    {
        $this->inspectionService = $inspectionService;
    }

    public function index()
    {
        $inspections = $this->inspectionService->getAllInspections();
        return view('inspections.index', compact('inspections'));
    }

    public function create()
    {
        return view('inspections.create');
    }

    public function store(StoreInspectionRequest $request)
    {
        $data = $request->validated();
     
        $this->inspectionService->createInspection($data);

        return redirect()->route('inspections.index')->with('success', 'Inspection created successfully.');
    }

    public function edit($id)
    {
        $inspection = $this->inspectionService->getInspection($id);
        return view('inspections.edit', compact('inspection'));
    }

    public function update(UpdateInspectionRequest $request, $id)
    {
        $data = $request->validated();
        $this->inspectionService->updateInspection($id, $data);

        return redirect()->route('inspections.index')->with('success', 'Inspection updated successfully.');
    }

    public function destroy($id)
    {
        $this->inspectionService->deleteInspection($id);
        return redirect()->route('inspections.index')->with('success', 'Inspection deleted successfully.');
    }
}
