<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function home(): string
    {
        return view('home');
    }

    public function registrar(): string
    {
        return view('registro');
    }
}
