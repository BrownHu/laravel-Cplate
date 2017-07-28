<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    public $timestamps=false;
       public  function phone(){
        return $this->hasOne(Phone::class,'staff_id','id');
    }
    public function card(){
        return $this->hasMany(Card::class,'staff_id','id');
    }
    public function setHeadImgAttribute($picture){
            if (is_array($picture)){
                $this->attributes['head_img'] = json_encode($picture);
            }
    }
//    public function getHeadImgAttribute($picture){
//           return  json_decode($picture,true);
//    }
}
