<?php

namespace Module\Clients\Controllers;

use Infrastructure\Http\Controller;
use Module\Products\Services\CategoryService;
use Module\Clients\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function getAll()
    {
        $data = $this->orderService->getOrder();
        return view('client.products.order', compact('data'));
    }   

    public function updateProduct(Request $request)
    {
        $this->orderService->updateProduct($request->order_detail, $request->order_id);
        // dd($request->all());
        return redirect('/');
    }

    public function addCart(Request $request)
    {
        $this->orderService->cart(request()->user()->id, $request->order_detail);
        return redirect()->back();
    }
}