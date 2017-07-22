<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lienhe extends Model
{
    protected $table='lienhes';
    protected $fillable = ['id','sdt','diachi'];
    public $timestamps = true;
}
