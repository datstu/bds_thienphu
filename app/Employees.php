<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'avatar','name','status','date_start_work','title','department_name','number_phone','email','created_at','updated_at'];
    protected $primaryKey = 'id';
    protected $table = 'tbl_nhan_vien';
}
