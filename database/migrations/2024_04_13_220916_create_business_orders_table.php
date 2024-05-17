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
        Schema::create('business_orders', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger('customerID')->index();
            $table->string('company_name');
            $table->string('company_address');
            $table -> enum('title', ['Hardware issue', 'Software issue']);
            $table -> string('description_cost');
            $table -> string('company_date');
            $table -> string('company_time');
            $table -> foreign('customerID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_orders');
    }
};
