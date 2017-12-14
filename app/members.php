<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    //
    public $table='members';
    public function categories(){
        return $this->hasOne(Categories::class);
    }
}
