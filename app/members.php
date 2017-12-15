<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    //
    public $table='members';
    public function movies(){
        return $this->hasManyThrough(Movies::class, Categories::class);
    }
}
