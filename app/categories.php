<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    public $table = 'categories';
    public function movies(){
        return $this->hasOne(Movies::class);
    }
}
