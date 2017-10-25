<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_about extends Model
{
    protected $table = "about";
    protected $fillable =
    [
      'nama_app','link', 'nama_corporate', 'caption', 'isi_about', 'alamat', 'telp',
      'faks', 'link_fb', 'link_twitter', 'link_instagram', 'link_youtube', 'link_map',
      'link_api', 'link_snk', 'link_faq',
    ];
}
