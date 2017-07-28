<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phone';

    public $timestamps = false;
    public function  staff(){
        return  $this->belongsTo(Staff::class,'id','staff_id');
    }
}
