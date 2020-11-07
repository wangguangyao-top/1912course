<?php
namespace app\index\controller;

class Article
{
    public function index()
    {
        return view("article");
    }

    public function ArtMinute(){
        return view('ArtMinute');
    }
}