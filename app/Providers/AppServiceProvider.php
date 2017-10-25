<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\model_main_menu;
use App\model_menu_data;
use App\model_about;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //untuk share variable ke semua view - navigator
        $about = model_about::All('nama_app','link', 'nama_corporate', 'caption', 'isi_about', 'alamat', 'telp',
        'faks', 'link_fb', 'link_twitter', 'link_instagram', 'link_youtube', 'link_map', 'link_api', 'link_snk', 'link_faq');
        $menu = model_main_menu::All('id', 'nama_mm', 'link');
        $klasifikasi = model_menu_data::where('id', '!=', '99')->get();
        view::share(compact('about','menu', 'klasifikasi'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
