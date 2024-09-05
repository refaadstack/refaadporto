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
        Schema::create('job_descs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id');
            $table->text('description');

            // Foreign key constraint
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_descs');
    }
};
