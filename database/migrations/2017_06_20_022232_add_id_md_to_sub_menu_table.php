<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdMdToSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_menu_data', function (Blueprint $table) {
            $table->unsignedInteger('id_smd')->after('id');
            $table->foreign('id_smd')
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
        Schema::table('sub_menu_data', function (Blueprint $table) {
            $table->dropForeign(['id_sm']);
            $table->dropColumn('id_sm');
        });
    }
}
