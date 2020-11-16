<?php
namespace app\index\controller;

class UserCentre extends Common
{
    /**
     * 用户个人中心
     * @return \think\response\View
     *
     */
    //个人中心
    public function index()
    {
        return view('index');
    }
    //我的课程
    public function usercourse(){
        $url="http://www.tp6.com/api/Usercourse/usercourse";
        $data=file_get_contents("php://input");
        $data = $this->http_post($url,$data);
        $data = json_decode($data,true);
        return view("usercourse",['data'=>$data]);
    }
    //我的问答
    public function myask(){
        $url="http://www.tp6.com/api/useranswer/useranswer";
        $data=file_get_contents("php://input");
        $data = $this->http_post($url,$data);
        $data = json_decode($data,true);
        return view('myask',['data'=>$data]);
    }
    //我的笔记
    public function mynote(){
        $url="http://www.tp6.com/api/Usernote/usernote";
        $data=file_get_contents("php://input");
        $data = $this->http_post($url,$data);
        $data = json_decode($data,true);
        return view('mynote',['data'=>$data]);
    }

    public function mywork(){
        $url="http://www.tp6.com/api/Userjob/userjob";
        $data=file_get_contents("php://input");
        $data = $this->http_post($url,$data);
        $data = json_decode($data,true);
        return view('mywork',['data'=>$data]);
    }

    public function mybank(){
        $url="http://www.tp6.com/api/Bank/userbank";
        $data=file_get_contents("php://input");
        $data = $this->http_post($url,$data);
        $data = json_decode($data,true);
        return view('mybank',['data'=>$data]);
    }
}