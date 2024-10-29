<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = [
        'customer_name',
        'order_no',
        'project',
        'shape',
        'inspection_stage',
        'inspection_param',
        'check',
        'status',
        'qc_notes',
        'approved_by',
        'quality_inspector',
        'inspection_date',
    ];
}
