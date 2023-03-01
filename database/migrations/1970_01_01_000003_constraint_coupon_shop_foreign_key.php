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
        Schema::table('coupon_shop', function (Blueprint $table) {
            $table->foreign('coupon_id')->references('id')->on('coupons');
            $table->foreign('shop_id')->references('id')->on('shops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coupon_shop', function (Blueprint $table) {
            $table->dropForeign(['coupon_id']);
            $table->dropForeign(['shop_id']);
        });
    }
};
