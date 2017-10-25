<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_review_data extends Model
{
    protected $table = "review_data";
    protected $fillable =
    [
      'id', 'id_md', 'judul_rd', 'slug_rd', 'isi_rd', 'link_csv', 'link_json', 'crated_at', 'updated_at',
    ];
}
