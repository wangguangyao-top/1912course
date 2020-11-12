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
}