<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdIdSmdToReviewDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review_data', function (Blueprint $table) {
            $table->unsignedInteger('id_smd')->after('id');
            $table->foreign('id_smd')
            ->references('id')->on('sub_menu_data')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_data', function (Blueprint $table) {
            $table->dropForeign(['id_smd']);
            $table->dropColumn('id_smd');
        });
    }
}
