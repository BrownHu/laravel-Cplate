<?php

/**
 * Created by PhpStorm.
 * User: hu
 * Date: 2017/7/28
 * Time: 下午4:00
 */
namespace  App\Admin\extensions;
use Encore\Admin\Admin;
class Console
{
    protected  $id;
    public function __construct($id)
    {
        $this->id=$id;
    }
    public function  script(){

        return <<<SCRIPT
        $('.hubing').on('click',function(){
                    console.log('shit');
        })

SCRIPT;



    }
    public function  render(){
        Admin::script($this->script());

        return "<a class='btn btn-xs btn-success fa fa-check grid-check-row hubing' data-id='{$this->id}'></a>";
    }
    public function __toString(){
        return $this->render();
    }
}