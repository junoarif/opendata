<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdMdToReviewdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review_data', function (Blueprint $table) {
            $table->unsignedInteger('id_md')->after('id');
            $table->foreign('id_md')
            ->references('id')->on('menu_data')
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
            $table->dropForeign(['id_md']);
            $table->dropColumn('id_md');
        });
    }
}
