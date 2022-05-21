<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id','descrizione'];
    public $timestamps = false;
}
