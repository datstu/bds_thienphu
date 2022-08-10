<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title','image','desc_sort','content','update_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_aboutus';
}
