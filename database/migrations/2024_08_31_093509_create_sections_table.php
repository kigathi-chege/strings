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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('content')->nullable()->comment('This should always be HTML renderable, when type is set to div or span');
            $table->text('style')->nullable()->comment('This should always stay updated based on the section styles and the section style groups');
            $table->text('description')->nullable();
            $table->enum('type', config('constant.section-types'))->nullable();
            $table->enum('status', config('constant.status'))->default(config('constant.default-status'));
            $table->text('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
