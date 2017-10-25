<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApiSnkFaqAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about', function (Blueprint $table) {
            $table->string('link_api', '100')->after('link_map');
            $table->string('link_snk', '100')->after('link_api');
            $table->string('link_faq', '100')->after('link_snk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about', function (Blueprint $table) {
            $table->dropColumn('link_api');
            $table->dropColumn('link_snk');
            $table->dropColumn('link_faq');
        });
    }
}
