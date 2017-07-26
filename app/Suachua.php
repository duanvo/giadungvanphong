<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suachua extends Model
{
    protected $table="suachuas";
    protected $fillable = ['id','tittle','cost','image','image_path','type','introduce'];

    public $timestamps=true;
}
