<?php

namespace App\Http\Requests\Inspection;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInspectionRequest extends FormRequest
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
            'customer_name' => 'nullable|string',
            'order_no' => 'nullable|string',
            'project' => 'nullable|string',
            'shape' => 'nullable|string',
            'inspection_stage' => 'nullable|string',
            'inspection_param' => 'nullable|string',
            'check' => 'nullable|string',
            'status' => 'nullable|string',
            'qc_notes' => 'nullable|string',
            'approved_by' => 'nullable|string',
            'quality_inspector' => 'nullable|string',
            'inspection_date' => 'nullable|date',
        ];
    }
}
