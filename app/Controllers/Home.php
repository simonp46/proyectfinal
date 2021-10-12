<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function form()
    {
        return view('form');
    }
    public function nuevacita()
    {
        return view('nuevacita');
    }
    public function vercita()
    {
        return view('vercita');
    }
}
