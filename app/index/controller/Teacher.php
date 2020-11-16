<?php
namespace app\index\controller;

use app\index\controller\Common;
use think\Request;


class Teacher extends Common
{
    public function teacher()
    {
        $url="http://www.tp6.com/api/lect/index";
        $data=file_get_contents("php://input");
        $data = $this->http_post($url,$data);
        $data = json_decode($data,true);
        return view("teacher",['data'=>$data]);
    }
    public function teacherPage()
    {
        return view("teacherPage");
    }
}