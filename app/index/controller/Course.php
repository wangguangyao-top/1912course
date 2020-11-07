<?php
namespace app\index\controller;

class Course
{
    //课程列表
    public function course()
    {
        return view("course");
    }
    //课程内容
    public function coursePage()
    {
        return view("coursePage");
    }
    //加入课程
    public function coursePage2()
    {
        return view("coursePage2");
    }
    //播放视频
    public function courseVideo(){
        return view("courseVideo");
    }
}