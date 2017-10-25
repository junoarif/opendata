<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model_menu_data;
use App\model_slider;
use App\model_link_eksternal;

class controller_home extends Controller
{
    public function index()
    {
      //retrive model menu data
      $menu_dt = model_menu_data::where('id', '!=', '99')->get();

      //retrive model slider
      $slider = model_slider::All('id', 'judul', 'link', 'caption');

      //retrive model eksternal_link
      $link_eksternal = model_link_eksternal::All('id', 'nama', 'logo', 'topik', 'caption', 'link');

      return view('pages.opening', compact('menu_dt', 'slider','link_eksternal' ));
    }

    public function api()
    {

    }
}
