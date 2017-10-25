<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //to use facedes DB
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; //untuk menggunakan fungsi facedes auth
use Illuminate\View\View;

use App\model_v_count_posting;
use App\model_history;
use App\model_user_log;
use App\model_review_data;
use App\model_menu_data;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id(); //tangkap auth id
        $count = DB::table('v_count_posting')
                     ->where('id_user', '=', "$id")
                     ->get();
        $list_dt = DB::table('review_data')
                    ->select('id', 'judul_rd')
                    ->where('id_user', '=', "$id")
                    ->paginate(5);
        $user_log = DB::table('user_log')
                    ->where('id_user', '=', "$id")
                    ->get();
        $kategori = model_menu_data::all('id', 'nama_menu');

        return view('adm-pages.adm-home', compact('count', 'list_dt', 'user_log', 'kategori'));
    }

}
