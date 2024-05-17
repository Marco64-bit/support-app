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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger('customerID')->index();
            $table->string('solve_problem');
            $table->string('time_taken');
            $table->string('customer_satisfaction');
            $table->string('job_location');
            $table->string('suggestion')->nullable();
            $table->foreign('customerID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
