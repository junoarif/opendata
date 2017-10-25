<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_main_menu extends Model
{
    protected $table = "main_menu";
    protected $fillable =
    [
      'id', 'nama_mm', 'link',
    ];
}
