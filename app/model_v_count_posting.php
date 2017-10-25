<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_v_count_posting extends Model
{
    protected $table = "v_count_posting";
    protected $fillable =
    [
      'id_user', 'count',
    ];
}
