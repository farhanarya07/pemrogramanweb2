<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function chart(){
        return view('chart');
    }

    public function checkout(): string
    {
        return view('checkout');
    }

    public function search(): string
    {
        return view('search');
    }

    public function submit(): string
    {
        return view('submit');
    }

}