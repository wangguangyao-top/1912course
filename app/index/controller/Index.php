<?php
namespace app\index\controller;

use think\cache\driver\Redis;
use app\index\controller\Common;
use think\Request;

class Index extends Common
{
    //课程分类
    public function index()
    {
        $url="http://www.tp6.com/api/category/index";
        $data=file_get_contents("php://input");
        $data = $this->http_post($url,$data);
        $data = json_decode($data,true);
        $info=$this->index2();
        return view("index@index/index",['data'=>$data,'info'=>$info]);
    }
    //课程展示
    public function index2()
    {
        $url="http://www.tp6.com/api/category/index1";
        $info=file_get_contents("php://input");
        $info = $this->http_post($url,$info);
        $info = json_decode($info,true);
        return $info;
    }
}
