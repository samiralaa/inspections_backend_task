<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('order_no')->nullable();
            $table->string('project')->nullable();
            $table->string('shape')->nullable();
            $table->string('inspection_stage')->nullable();
            $table->string('inspection_param')->nullable();
            $table->string('check')->nullable();
            $table->string('status')->nullable();
            $table->text('qc_notes')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('quality_inspector')->nullable();
            $table->date('inspection_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
