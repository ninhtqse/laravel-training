<?php

namespace Module\Clients\Controllers;

use Infrastructure\Http\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('client.products.product');
    }
}