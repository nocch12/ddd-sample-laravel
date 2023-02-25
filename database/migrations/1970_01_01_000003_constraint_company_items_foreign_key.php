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
        Schema::table('company_items', function (Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('cross_section_item_id')->references('id')->on('cross_section_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_items', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
            $table->dropForeign(['cross_section_item_id']);
        });
    }
};
