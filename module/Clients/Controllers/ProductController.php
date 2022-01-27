<?php

namespace Module\Clients\Controllers;

use Infrastructure\Http\Controller;
use Module\Clients\Services\CategorySevice;
use Module\Clients\Services\ProductService;

class ProductController extends Controller
{
    protected $categorySevice;
    protected $productService;

    public function __construct(CategorySevice $categorySevice, ProductService $productService)
    {
       $this->categorySevice = $categorySevice;
       $this->productService = $productService;
    }
   
    public function index($id)
    {
        [$category_parent, $category_child] = $this->categorySevice->getById($id);
        return view('client.products.product', compact('category_parent', 'category_child', 'id'));
    }

    public function getProductDetail($id)
    {
        [$data, $attributes] = $this->productService->getById($id);
        // foreach($data->product_details()->get() as $pro){
        //     dd($pro->price);
        // }
        return view('client.products.product_detail', compact('data', 'attributes'));
    }

}