<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapgiativi extends Model
{
    protected $table="lapgiativis";
    protected $fillable = ['id','tittle','cost','introduce'];

    public $timestamps=true;
}
