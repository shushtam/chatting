<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    //
    protected $fillable  = ['body','room_name','nickname'];
}
