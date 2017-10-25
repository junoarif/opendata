<?php

namespace App\Http\Controllers;
use App\Fileentry;
//use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB; //to use facedes DB

use Illuminate\Http\Request;


use App\model_review_data;

class controller_data extends Controller
{
  public function index()
  {
    $rd = model_review_data::All('id', 'id_md', 'judul_rd', 'slug_rd', 'isi_rd', 'link_csv', 'link_json', 'created_at', 'updated_at');
    return view('pages.data', compact('rd'));
  }

  public function tampil_klas($slug_md)
  {
    //pakai join
    //$rd = model_review_data::where('slug_md','=',$slug_md)->get();
    $rd = DB::table('review_data')
              ->join('menu_data', 'review_data.id_md', '=', 'menu_data.id')
              ->select('review_data.id', 'review_data.judul_rd', 'review_data.slug_rd', 'review_data.isi_rd', 'review_data.link_csv', 'review_data.link_json')
              ->where('menu_data.slug_md', '=', $slug_md)
              ->orderBy('review_data.id')
              ->get();
    return view('pages.data', compact('rd'));
  }

  //fungsi download csv
  public function get($filename)
  {
    $entry = model_review_data::where('link_csv', '=',$filename)->firstOrFail();
    $file =Storage::disk('public')->get($entry->link_csv);

    return (new Response($file, 200))
            ->header('Content-Type', $entry->mime);
  }

  //fungsi search data
  public function search(Request $request)
  {
    $x = $request->get('search');
    $rd = model_review_data::where('judul_rd','LIKE', '%' .$x . '%')->paginate(100);
    return view('pages.data', compact('rd', 'x'));
  }

  //fungsi detail data
  public function detail($slug)
  {
    $id = $slug;
    $rd = model_review_data::where('slug_rd','=',$slug)->get();
    return view('pages.data_detail', compact('rd', 'id'));
  }

  //fungsi tampilkan csv
  public function showcsv($id)
  {
    $id = $id;
    $entry = model_review_data::where('id', '=',$id)->firstOrFail();
    //read file to string
    $file = Storage::disk('public')->get($entry->link_csv);

    //explode string to array dengan delimiter \n
    $rows = explode("\n", $file);
    //explode array row pertama dan kedua dengan delimiter ;
    $headers = explode(";", $rows[0]);
    $row = explode(";", $rows[1]);
    //combine array
    $therows = array_combine($headers, $row);

    //print_r($therows);


  return view('pages.data_show', compact('therows', 'id'));
  return view('pages.data_show2', compact('therows'));
  }
  public function showcsv2($id)
  {
    $id = $id;
    $entry = model_review_data::where('id', '=',$id)->firstOrFail();
    //read file to string
    $file = Storage::disk('public')->get($entry->link_csv);
    /*
        $rows = array();
       $headers = array();
               $row = fgetcsv($file, 10240, ',', '"');
               if (empty($headers))
                   $headers = $row;
               else if (is_array($row)) {
                   array_splice($row, count($headers));
                   $rows[] = array_combine($headers, $row);

           }

       return $rows;

    */
      $rows = explode("\n", $file);
      $row = array_splice($rows, 1, count($rows));
      $header = explode(";", $rows[0]);

      $therows = explode(";", $rows[0]);
      $rowb = explode(";", $row[0]);
      $rowc = explode(";", $row[1]);

      array_push($therows, $rowb);
      array_push($therows, $rowc);
      //$the_rows = array_combine($header, $row1 );







      //$row2 = explode(";", $row);
      //$the_rows = array_combine($header, $row);
    /*
        //explode string to array dengan delimiter \n
        $rows = explode("\n", $file);
        //explode array row pertama dan kedua dengan delimiter ;
        $headers = explode(";", $rows[0]);
        $row = explode(";", $rows[1]);
        //combine array
        $therows = array_combine($headers, $row);
    */

        //print_r($the_rows);
        //print_r($row2);
      //print_r($rowa);
        //print_r($therows);
  return view('pages.data_show2', compact('therows'));
  }

}
