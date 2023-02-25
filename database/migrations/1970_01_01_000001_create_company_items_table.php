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
        Schema::create('company_items', function (Blueprint $table) {
            $table->id();
            $table->string('company_id');
            $table->string('manage_item_id');
            $table->string('name');
            $table->string('cross_section_item_id')->nullable();
            $table->string('jan_code', 13)->nullable();
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
        Schema::dropIfExists('company_items');
    }
};
