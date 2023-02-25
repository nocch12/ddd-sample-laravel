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
        Schema::table('payment_detail_methods', function (Blueprint $table) {
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('method_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_detail_methods', function (Blueprint $table) {
            $table->dropForeign(['payment_id']);
            $table->dropForeign(['method_id']);
        });
    }
};
