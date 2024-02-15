<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function header()
    {
        return view ('site');
    }
    public function acts()
    {
        return view ('activities');
    }
    public function ach(){
        return view ('achievements');
    }
    public function contacts(){
        return view ('contacts');
    }
}
