<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'card';
    public function  staff(){
        return $this->belongsTo(Staff::class,'id','staff_id');
    }
}
