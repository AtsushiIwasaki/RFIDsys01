<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //idとnameとageを連結して返す
    public function getData(){
        return $this->id . ': ' . $this->name . '(' . $this->age. ')';
    }
}
