<?php
namespace app\index\controller;

class Article
{
    //资讯
    public function index()
    {
        return view("article");
    }
    public function ArtMinute(){
        return view('ArtMinute');
    }
    public function ArtMinuteHot(){
        return view('ArtMinuteHot');
    }
    public function ActiMinute(){
        return view('ActiMinute');
    }
}