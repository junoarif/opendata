<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_slider extends Model
{
    protected $table = "slider";
    protected $fillable =
    [
      'id', 'judul', 'link', 'caption',
    ];
}
