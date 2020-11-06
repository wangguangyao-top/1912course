<?php
namespace app\index\controller;

class Admin
{
    public function index()
    {
        return '1，宁';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function abc(){
        echo "吴孟林到此一游";
        return view('index@Admin/index');
    }
}
