<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_user_log extends Model
{
    protected $table = "user_log";
    protected $fillable =
    [
      'id', 'id_user', 'login', 'updated_at',
    ];
}
