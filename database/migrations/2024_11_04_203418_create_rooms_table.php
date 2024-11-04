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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->enum('room_type', ['single', 'double', 'triple', 'queen', 'king']);
            $table->float('price_per_neight');
            $table->boolean('is_VIB')->comment("0: is not VIB\n1: is VIB")->default(0);
            $table->text('description')->nullable();
            $table->boolean('status')->comment("0: is available\n1: is not available")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};