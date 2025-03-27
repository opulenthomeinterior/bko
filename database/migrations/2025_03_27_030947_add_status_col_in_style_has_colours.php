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
        Schema::table('style_has_colours', function (Blueprint $table) {
            //
            $table->tinyInteger('page_status')->default(0)->after('status');
            $table->json('suitable_components')->nullable()->after('page_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('style_has_colours', function (Blueprint $table) {
            //
            $table->dropColumn('page_status');
            $table->dropColumn('suitable_components');
        });
    }
};
