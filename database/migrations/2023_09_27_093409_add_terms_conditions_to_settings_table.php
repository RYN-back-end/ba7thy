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
        Schema::table('settings', function (Blueprint $table) {
            // $table->text('terms_conditions_ar');
            // $table->text('terms_conditions_en');
            // $table->text('privacy_ar');
            // $table->text('privacy_en');
            // $table->text('return_policy_ar');
            // $table->text('return_policy_en');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
};
