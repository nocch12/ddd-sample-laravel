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
        Schema::create('coupon_distributions', function (Blueprint $table) {
            $table->string('coupon_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedTinyInteger('distribution_status')->default(0);
            $table->dateTime('distributed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_distributions');
    }
};
