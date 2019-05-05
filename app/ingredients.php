<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    protected $fillable =[
        'name', 'qty'

    ];


    public $timestamps = false;
}



