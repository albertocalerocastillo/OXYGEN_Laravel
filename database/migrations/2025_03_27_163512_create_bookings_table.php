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
        Schema::create('bookings', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('guest');
            $table->string('orderDate');
            $table->string('checkInDate');
            $table->string('checkInTime')->nullable();
            $table->string('checkOutDate');
            $table->string('checkOutTime')->nullable();
            $table->text('specialRequest')->nullable();
            $table->string('roomId');
            $table->string('status')->nullable();
            $table->string('specialRequestType')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};