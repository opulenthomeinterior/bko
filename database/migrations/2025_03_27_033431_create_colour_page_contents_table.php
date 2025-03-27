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
        Schema::create('colour_page_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('style_has_colour_id');
            $table->string('section_main_heading')->nullable();
            $table->longText('section_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colour_page_contents');
    }
};
