<?php
namespace app\index\controller;

class User
{
    /**
     * @return \think\response\View
     * 注册
     */
    public function reg()
    {
        return view("reg");
    }
    /**
     * 登录
     */
    public function login()
    {
        return view("login");
    }
}