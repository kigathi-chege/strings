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
        if (!Schema::hasTable('styles')) {
            Schema::create('styles', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->text('content')->nullable()->comment('The actual style goes here, for example: aspect-ratio: auto;');
                $table->text('description')->nullable();
                $table->foreignId('style_category_id')->constrained('style_categories')->onDelete('cascade');
                $table->foreignId('style_category_type_id')->constrained('style_category_types')->onDelete('cascade');
                $table->foreignId('color_id')->nullable()->constrained('colors')->onDelete('cascade');
                $table->foreignId('spacing_id')->nullable()->constrained('spacings')->onDelete('cascade');
                $table->foreignId('breakpoint_id')->nullable()->constrained('breakpoints')->onDelete('cascade');
                $table->unsignedInteger('index')->default(0);
                $table->enum('status', config('constant.status'))->default(config('constant.default-status'));
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('styles');
    }
};
