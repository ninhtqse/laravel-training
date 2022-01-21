<?php

namespace Module\Products\Controllers;

use Illuminate\Http\Request;
use Module\Products\Services\OrderService;
use Infrastructure\Http\Controller;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function getAll()
    {
        $results = $this->orderService->getAll();
        return view('admin.orders.list', compact('results'));
    }

    public function getById($id)
    {
        $order = $this->orderService->getById($id);
        dd($order);
        return view('admin.orders.detail', compact('order'));
    }

    public function editStatus(Request $request,$id)
    {
        $orders = $request->orders;
        $this->orderService->editStatus($orders, $id);
        return redirect()->back();
    }

}