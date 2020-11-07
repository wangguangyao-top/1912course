<?php
namespace app\index\controller;

class UserCentre
{
    /**
     * 用户个人中心
     * @return \think\response\View
     *
     */
    public function userCentre()
    {
        return view("userCentre");
    }
}