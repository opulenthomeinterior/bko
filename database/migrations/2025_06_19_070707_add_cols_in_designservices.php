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
        Schema::table('designservices', function (Blueprint $table) {
            //
            $table->string('discount_code')->nullable()->after('phone');
            $table->longText('address')->nullable()->after('discount_code');
            $table->longText('note')->nullable()->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('designservices', function (Blueprint $table) {
            //
        });
    }
};
