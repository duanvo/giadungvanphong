<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muabandocu extends Model
{
    protected $table='muabandocus';
    protected $fillable = ['id','tittle','cost','type','introduce'];

    public $timestamps = true;
}
