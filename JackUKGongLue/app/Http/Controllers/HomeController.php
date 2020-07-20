<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function carInsurance()
    {
        return view('carInsurance');
    }

    public function buyCar()
    {
        return view('buyCar');
    }

    public function accommodation()
    {
        return view('accommodation');
    }
}