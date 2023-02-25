<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_method_point_setting', function (Blueprint $table) {
            $table->unique(['payment_method_id', 'point_setting_id'], 'payment_method_point_setting_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_method_point_setting', function (Blueprint $table) {
            $table->dropUnique('payment_method_point_setting_unique');
        });
    }
};
