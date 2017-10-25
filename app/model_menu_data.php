<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_menu_data extends Model
{
  protected $table = "menu_data";
  protected $fillable =
  [
    'id', 'nama_menu', 'slug_md', 'pic',
  ];
}
