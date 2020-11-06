<?php
namespace app\admin\controller;

class Admin
{
    public function index()
    {
        return '1,赵志宁 哟一哟一';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function abc(){
        echo 12345;
        return view('Admin@Admin/Admin');
    }
}
