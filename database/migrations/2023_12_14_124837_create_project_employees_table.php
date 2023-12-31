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
        Schema::create('project_employee', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained('employees', 'employee_id');
            $table->integer('blacklist', 1);
            $table->string('remarks', 20);
            $table->foreignId('project_id')->constrained('projects', 'project_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_employee');
    }
};
