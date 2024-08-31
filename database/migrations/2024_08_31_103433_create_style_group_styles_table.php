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
        Schema::create('style_group_styles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('style_group_id')->constrained('style_groups')->onDelete('cascade');
            $table->foreignId('style_id')->constrained('styles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('style_group_styles');
    }
};
