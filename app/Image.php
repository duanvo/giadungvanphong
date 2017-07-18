<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='images';
    protected $fillable=['id','type','id_post','image','image_path'];
    public $timestamps = true;
}
