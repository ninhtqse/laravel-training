<?php

namespace Module\Products\Controllers;

use Illuminate\Http\Request;
use Module\Products\Services\ProductService;
use Module\Products\Services\ProductDetailService;
use Infrastructure\Http\Controller;
use Illuminate\Support\Facades\Auth;
use Module\Categories\Services\CategoryService;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;
    protected $productDetailService;

    public function __construct(ProductService $productService, CategoryService $categoryService, ProductDetailService $productDetailService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
        $this->productDetailService = $productDetailService;
    }

    public function getCreate()
    {
        $results = $this->categoryService->getAll();
        return view('admin.products.create', compact('results'));
    }

    public function create(Request $request)
    {
        $products = $request['products'];
        $products['id'] = (string)\Str::uuid();
        $product_details = $request['product_details'];
        $product_details['product_id'] = $products['id'];
        $this->productService->create($products);
        $this->productDetailService->create($product_details);
        return redirect()->route('get_product');
    }

    public function getAll()
    {
        $results = $this->productDetailService->getAll();
        return view('admin.products.list', compact('results'));

    }


    
}