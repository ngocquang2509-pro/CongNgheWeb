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
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('it_center_id');
            $table->foreign('it_center_id')->references('id')->on('it_centers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_devices');
    }
};
