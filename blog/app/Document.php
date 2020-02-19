<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //

    function isComplete(){
        return false;
    }

    public function scopeInComplete1($query){

        return $query->where('completed',0)->get();
    }
}
