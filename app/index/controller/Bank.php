<?php
namespace app\index\controller;

class Bank
{
    public function index()
    {
        return view("bank");
    }

    public function secondary(){

        return view('secondary');
    }
}