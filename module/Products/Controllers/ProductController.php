<?php

namespace Module\Products\Controllers;

use Illuminate\Http\Request;
use Module\Products\Requests\CreateProductRequest;
use Module\Products\Services\ProductService;
use Module\Products\Services\ProductDetailService;
use Infrastructure\Http\Controller;
use Illuminate\Support\Facades\Auth;
use Module\Products\Services\CategoryService;
use Module\Products\Services\AttributeService;
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
        return view('admin.products.create_product', compact('results', 'attributes'));
    }

    public function create(CreateProductRequest $request)
    {
        dd($request->all());
        $products           = $request->products;
        $productDetails     = $request->product_details;
        $attributeProducts  = $request->attribute_products;
        $this->productService->create($products, $productDetails, $attributeProducts);
        return redirect()->route('get_product');
    }

    public function getAll()
    {
        $results = $this->productDetailService->getAll();
        return view('admin.products.list_product', compact('results'));
    }

    public function getEdit($id)
    {
        $product = $this->productService->getProductById($id);
        $categories = $this->categoryService->getAll();
        $attributes = $this->attributeService->getAll();
        return view('admin.products.edit_product', compact('product', 'categories', 'attributes'));
    }

    public function edit(Request $request, $id)
    {
        $products           = $request->products;
        $productDetails     = $request->product_details;
        $attributeProducts  = $request->attribute_products;
        $this->productService->edit($id, $products, $productDetails, $attributeProducts);
        return redirect()->route('get_all_attribute');
    }

    public function delete($id)
    {
        $this->productService->delete($id);
        return redirect()->route('get_all_attribute');
    }

}
