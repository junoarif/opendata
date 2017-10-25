<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->string('nama_app', '22');
            $table->string('link', '100');
            $table->string('nama_corporate', '100');
            $table->string('caption', '300');
            $table->string('isi_about');
            $table->string('alamat');
            $table->string('telp', '12');
            $table->string('faks', '12');
            $table->string('link_fb', '150');
            $table->string('link_twitter', '150');
            $table->string('link_instagram', '150');
            $table->string('link_yutube', '150');
            $table->string('link_map', '150');
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
        Schema::dropIfExists('about');
    }
}
