<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapgiativi extends Model
{
    protected $table="lapgiativis";
    protected $fillable = ['id','tittle','cost','image','image_path','introduce'];

    public $timestamps=true;
}
