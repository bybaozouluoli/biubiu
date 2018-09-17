<?php
namespace app\Lists\controller;

use think\View;

class Lists
{
    public function index(){
        return view('Lists/view/index');
    }
    public function goods(){
//        $view=new View();
//        return $view -> fetch('/goods');
        return view('goods',['name'=>'thinkphp']);
    }
}
