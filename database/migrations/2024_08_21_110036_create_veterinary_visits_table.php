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
        Schema::create('veterinary_visits', function (Blueprint $table) {
            $table->id();
            $table->string('veterinary_name');
            $table->string('veterinary_center');
            $table->date('visit_date');
            $table->unsignedBigInteger('pet_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinary_visits');
    }
};
