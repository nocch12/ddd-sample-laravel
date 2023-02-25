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
        Schema::create('coupons', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('company_id');
            $table->unsignedInteger('distributionLimit');
            $table->dateTime('distribution_begin');
            $table->dateTime('distribution_end');
            $table->dateTime('use_begin');
            $table->dateTime('use_end');
            $table->double('point_rate', 4, 1);
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
        Schema::dropIfExists('coupons');
    }
};
