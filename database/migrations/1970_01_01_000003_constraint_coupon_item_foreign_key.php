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
        Schema::table('coupon_item', function (Blueprint $table) {
            $table->foreign('coupon_id')->references('id')->on('coupons');
            $table->foreign('company_item_id')->references('id')->on('company_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coupon_item', function (Blueprint $table) {
            $table->dropForeign(['coupon_id']);
            $table->dropForeign(['company_item_id']);
        });
    }
};
