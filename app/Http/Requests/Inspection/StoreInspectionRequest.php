<?php

namespace App\Http\Requests\Inspection;

use Illuminate\Foundation\Http\FormRequest;

class StoreInspectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'customer_name' => 'required|string',
            'order_no' => 'required|string',
            'project' => 'required|string',
            'shape' => 'required|string',
            'inspection_stage' => 'required|string',
            'inspection_param' => 'required|string',
            'check' => 'required|string',
            'status' => 'required|string',
            'qc_notes' => 'required|string',
            'approved_by' => 'required|string',
            'quality_inspector' => 'required|string',
            'inspection_date' => 'required|date',
        ];
    }
}
