<?php

use Illuminate\Database\Seeder;

class menu_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_data')->insert([
          'nama_menu' => str_random(10),
        ]);
    }
}
