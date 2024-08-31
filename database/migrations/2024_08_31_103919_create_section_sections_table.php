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
        Schema::create('section_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('sections')->onDelete('cascade');
            $table->foreignId('child_id')->constrained('sections')->onDelete('cascade');
            $table->unsignedInteger('index')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_sections');
    }
};
