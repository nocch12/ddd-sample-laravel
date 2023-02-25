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
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->foreign('point_setting_id')->references('id')->on('point_settings');
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
            $table->dropForeign(['payment_method_id']);
            $table->dropForeign(['point_setting_id']);
        });
    }
};
