<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; //untuk menggunakan fungsi facedes auth

use App\model_history;
use App\model_user_log;
use App\model_review_data;

class Controller_admData extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function addData(Request $request)
  {
    $this->validate( $request, [
      'kategori' => 'required',
      'judul' => 'required',
      'caption' => 'required',
      'file_csv' => 'required',
    ]);

    $file = Request::file('file_csv');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$entry = new Fileentry();
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;

    //return $request;
    $data = new model_review_data();
    $data->id_md = $request['kategori'];
    $data->id_smd = '99';
    $data->judul_rd = $request['judul'];
    $data->slug_rd = Str::slug($request->get('judul'));
    $data->slug_rd = $request['slug'];
    $data->isi_rd = $request['caption'];
    $data->link_csv = $request['file_csv'];
    $data->save();

    return redirect()->to('/admData/input')->with('status', 'Judul :'.$request->judul.', Sukses di input');
  }

  public function editData($id)
  {

  }

  public function updateData(Request $request)
  {

  }
}
