<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_link_eksternal extends Model
{
    protected $table = "link_eksternal";
    protected $fillable =
    [
      'id', 'nama', 'logo', 'topik', 'caption', 'link',
    ];
}
