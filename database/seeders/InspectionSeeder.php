<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InspectionSeeder extends Seeder
{
    public function run()
    {
        // Insert sample inspections data
        DB::table('inspections')->insert([
            [
                'customer_name' => 'John Doe',
                'order_no' => 'ORD123456',
                'project' => 'Project Alpha',
                'shape' => 'Rectangle',
                'inspection_stage' => 'Final Inspection',
                'inspection_param' => 'Param 1',
                'check' => 'Pass',
                'status' => 'Approved',
                'qc_notes' => 'All checks passed successfully.',
                'approved_by' => 'Jane Smith',
                'quality_inspector' => 'Mike Johnson',
                'inspection_date' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'customer_name' => 'Alice Johnson',
                'order_no' => 'ORD123457',
                'project' => 'Project Beta',
                'shape' => 'Square',
                'inspection_stage' => 'Preliminary Inspection',
                'inspection_param' => 'Param 2',
                'check' => 'Fail',
                'status' => 'Pending',
                'qc_notes' => 'Needs further review.',
                'approved_by' => 'Alice Brown',
                'quality_inspector' => 'Chris White',
                'inspection_date' => Carbon::now()->subDays(1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more sample data as needed
        ]);
    }
}
