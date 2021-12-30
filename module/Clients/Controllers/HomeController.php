<?php

namespace Module\Clients\Controllers;

use Infrastructure\Http\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home.home');
    }

    public function about()
    {
        return view('client.home.about');
    }
    
    public function privacy()
    {
        return view('client.home.privacy');
    }
}