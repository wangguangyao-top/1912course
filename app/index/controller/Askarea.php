<?php
namespace app\index\controller;

use app\index\controller\Common;
class Askarea extends Common
{
    public function index()
    {
        $url="http://www.tp6.com/api/askarea/lists";
        $data=file_get_contents("php://input");
        $data=$this->http_post($url,$data);
        $data=json_decode($data,true);
        $ask=$data["ask"];
        $hot=$data["hot"];

        return view("askarea",compact("ask","hot"));
    }
}