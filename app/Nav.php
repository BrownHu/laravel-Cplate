<?php

namespace App;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class Nav extends Model

{
        protected $fillable=['Cname','Ename','url','enable','sort','show'];
        protected  $table='menus';
            public $timestamps=false;
}
