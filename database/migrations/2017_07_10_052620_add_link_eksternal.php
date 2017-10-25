<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLinkEksternal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_eksternal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', '100');
            $table->string('logo', '200');
            $table->string('topik', '300');
            $table->string('caption', '500');
            $table->string('link', '500');
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
        Schema::dropIfExists('link_eksternal');
    }
}
