<?php

namespace Module\Products\Controllers;

use Illuminate\Http\Request;
use Module\Products\Services\ProductService;
use Module\Products\Services\ProductDetailService;
use Infrastructure\Http\Controller;
use Illuminate\Support\Facades\Auth;
use Module\Categories\Services\CategoryService;
use Module\Attributes\Services\AttributeService;
class ProductController extends Controller
{
    protected $productService;

    protected $categoryService;

    protected $productDetailService;

    protected $attributeService;

    public function __construct(
        ProductService $productService, 
        CategoryService $categoryService, 
        ProductDetailService $productDetailService,
        AttributeService $attributeService
    )
    {
        $this->productService       = $productService;
        $this->categoryService      = $categoryService;
        $this->productDetailService = $productDetailService;
        $this->attributeService     = $attributeService;
    }

    public function getCreate()
    {
        $results = $this->categoryService->getAll();
        $attributes = $this->attributeService->getAll();
        return view('admin.products.create', compact('results', 'attributes'));
    }

    public function create(Request $request)
    {
        dd($request->all());
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
   
    public function getEdit($id)
    {
        $result = $this->productDetailService->getById($id);
        $categories = $this->categoryService->getAll();
        return view('admin.products.edit', compact('result', 'categories'));
    }

    public function edit(Request $request, $id)
    {
        $products = $request['products'];
        $this->categoryService->edit($products, $id);
        $this->productDetailService->editCategoryId();
        return redirect()->route('get_all_attribute');
    }


    
}