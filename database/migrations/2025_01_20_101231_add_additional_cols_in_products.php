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
        Schema::table('products', function (Blueprint $table) {
            //
            $table->string('second_height')->nullable()->after('height');
            $table->string('third_height')->nullable()->after('second_height');
            $table->string('second_width')->nullable()->after('width');
            $table->string('third_width')->nullable()->after('second_width');
            $table->string('fourth_width')->nullable()->after('third_width');
            $table->string('fifth_width')->nullable()->after('fourth_width');
            $table->string('second_depth')->nullable()->after('depth');
            $table->string('second_image_path')->nullable()->after('image_path');
            $table->string('third_image_path')->nullable()->after('second_image_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
