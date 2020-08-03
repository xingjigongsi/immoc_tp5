<?php
namespace app\index\controller;
use ali\Attset;
use think\Exception;
use inject;
use app\facade\Singwa;
use ali\Asset;

class Index
{
    public function index(){
        $this->agg(array(1,2,3,4,5,6));
    }

    public function agg(...$a){
        print_r($a);
    }

    public function hello($name = 'ThinkPHP5',$a='')
    {
        var_dump($a);
        return 'hello,' . $name;
    }
    public function test(){

    }
    public function facade(){
        \think\facade::bind('app\facade\Singwa',"app\common\Singwa");
        Singwa::app();
    }
}
