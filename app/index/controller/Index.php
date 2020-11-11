<?php
namespace app\index\controller;

use think\cache\driver\Redis;
use app\index\controller\Common;
use think\Request;

class Index extends Common
{
    public function index()
    {
        $url="http://www.tp6.com/api/category";
        $data=file_get_contents("php://input");
        $data = json_encode($data);
        $data = $this->http_post($url,$data);
        var_dump($data);
        return view("index@index/index");
    }

}
