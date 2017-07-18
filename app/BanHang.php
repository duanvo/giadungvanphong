<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanHang extends Model
{
    protected $table="banhangs";
    protected $fillable=['id','tittle','cost','introduce'];
    public $timestamp=true;
}
