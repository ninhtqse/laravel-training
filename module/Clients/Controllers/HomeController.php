<?php

namespace Module\Clients\Controllers;

use Infrastructure\Http\Controller;
use Module\Products\Services\CategoryService;

class HomeController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $data['category'] = $this->categoryService->getAllForHome();
        return view('client.home.home', compact('data'));
    }

    public function about()
    {
        return view('client.home.about');
    }
    
    public function privacy()
    {
        return view('client.home.privacy');
    }


    public function shoppingCart()
    {
        return view('client.products.shopping_cart');
    }

    public function checkout()
    {
        return view('client.products.checkout');
    }

}