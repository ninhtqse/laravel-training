<?php

namespace Module\Clients\Controllers;

use Infrastructure\Http\Controller;
use Module\Clients\Services\CategorySevice;

class ProductController extends Controller
{
    protected $categorySevice;

    public function __construct(CategorySevice $categorySevice)
    {
       $this->categorySevice = $categorySevice;
    }
   
    public function index($id)
    {
        [$category_parent, $category_child] = $this->categorySevice->getById($id);
        // dd($category_child);
        return view('client.products.product', compact('category_parent', 'category_child', 'id'));
    }

}