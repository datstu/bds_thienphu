<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaSeo extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'meta_desc','meta_keywords','meta_title'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_metaseo';
}
