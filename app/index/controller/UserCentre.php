<?php
namespace app\index\controller;

class UserCentre
{
    /**
     * 用户个人中心
     * @return \think\response\View
     *
     */
    //我的课程
    public function index()
    {
        return view("usercentre");
    }
    //我的问答
    public function myask(){
        return view('myask');
    }
    //我的笔记
    public function mynote(){
        return view('mynote');
    }

    public function mywork(){
        return view('mywork');
    }

    public function mybank(){
        return view('mybank');
    }
}