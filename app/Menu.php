<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected  $fillable=(['Cname','Ename','url','enable','show','sort']);
    public  $timestamps=false;
//    public function topicUsage(){
////        return $this->field([''])
//    }
}
