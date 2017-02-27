<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chatuser extends Model
{
    //
    protected $fillable  = ['nickname','email','password','image'];
}
