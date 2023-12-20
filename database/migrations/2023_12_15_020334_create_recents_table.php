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
        Schema::create('recents', function (Blueprint $table) {
            $table->id('recstats_id');
            $table->foreignId('employee_id')->constrained('employees', 'employee_id');
            $table->foreignId('users_id')->constrained('users', 'users_id');
            $table->dateTime('datetime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recents');
    }
};
