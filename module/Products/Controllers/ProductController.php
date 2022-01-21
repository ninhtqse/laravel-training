<?php

namespace Module\Products\Controllers;

use Illuminate\Http\Request;
use Module\Products\Services\ProductService;
use Module\Products\Services\ProductDetailService;
use Module\Products\Services\AttributeProductService;
use Infrastructure\Http\Controller;
use Illuminate\Support\Facades\Auth;
use Module\Products\Services\CategoryService;
use Module\Products\Services\AttributeService;
use Module\Products\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    protected $productService;

    protected $categoryService;

    protected $productDetailService;

    protected $attributeService;

    protected $attributeProductService;

    public function __construct(
        ProductService $productService, 
        CategoryService $categoryService, 
        ProductDetailService $productDetailService,
        AttributeService $attributeService,
        AttributeProductService $attributeProductService
    )
    {
        $this->productService       = $productService;
        $this->categoryService      = $categoryService;
        $this->productDetailService = $productDetailService;
        $this->attributeService     = $attributeService;
        $this->attributeProductService = $attributeProductService;
    }

    public function getCreate()
    {
        $results = $this->categoryService->getAll();
        $attributes = $this->attributeService->getAll();
        return view('admin.products.create', compact('results', 'attributes'));
    }

    public function create(Request $request)
    {
        $products = $request['products'];
        $productDetail = $request['product_details'];
        $name = $request['product_details']['name'];
        unset($productDetail['name']);
        $attributeProduct = $request['attribute_products'];
        $this->productService->create($products, $name, $productDetail, $attributeProduct);
        return 'abcxyz';
        
    }

    public function getByIdProduct($id)
    {
        $results = $this->categoryService->getAll();
        $attributes = $this->attributeService->getAll();
        $data = $this->productService->getByIdProduct($id);
        return view('admin.products.edit', compact('data', 'results', 'attributes'));
    }

    public function edit(UpdateProductRequest $request, $id)
    {
        // dd($request->all());
        $this->productService->edit($id, $request->all());
        return redirect()->back();
    }

    //getAllproduct

}