<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_history extends Model
{
    protected $table = "history";
    protected $fillable =
    [
      'id', 'id_user', 'act', 'obj', 'id_obj', 'val', 'updated_at',
    ];
}
