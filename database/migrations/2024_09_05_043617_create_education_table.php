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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personal_data_id');
            $table->string('institution');
            $table->string('degree');
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();

            // Foreign key constraint
            $table->foreign('personal_data_id')->references('id')->on('personal_data')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
