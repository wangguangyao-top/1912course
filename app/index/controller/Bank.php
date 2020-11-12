<?php
namespace app\index\controller;

use app\index\controller\Common;
class Bank extends Common
{
    public function index()
    {
        //题库分类
        $url="http://www.tp6.com/api/bank/index";
        $data=file_get_contents("php://input");
        $data=$this->http_post($url,$data);
        $data=json_decode($data,true);
        $class=$data["class"];
        $bank=$data["bank"];
        return view("bank",compact("class","bank"));
    }
    public function secondary(){
        return view("secondary");
    }

}