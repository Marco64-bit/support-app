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
        Schema::create('orders', function (Blueprint $table) {
            $table -> id();
            $table -> unsignedBigInteger('customerID')->index();
            $table -> enum('title', ['Hardware issue', 'Software issue']);
            $table-> string('description_cost');
            $table->string('home_address');
            $table->string('home_date' );
            $table->string('home_time' );
            $table->foreign('customerID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table -> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
