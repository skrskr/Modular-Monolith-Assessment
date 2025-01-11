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
        Schema::create('slots', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->dateTime('time');
            $table->foreignUuid('doctor_id')->constrained('users');
            $table->enum('status', ['free', 'reserved', 'cancelled', 'completed'])->default('free');
            $table->decimal('cost', 10, 3);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['doctor_id', 'time']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slots');
    }
};
