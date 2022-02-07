<?php

namespace Module\Clients\Services;

use Exception;
use Illuminate\Support\Str;
use Module\Products\Repositories\AttributeRepository;
use Module\Products\Repositories\ProductDetailRepository;
use Module\Products\Repositories\ProductRepository;
use Module\Products\Repositories\OrderRepository;
use Module\Products\Repositories\OrderDetailRepository;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class OrderService
{
    protected $orderDetailRepository;
    protected $orderRepository;
    protected $productDetailRepository;

    public function __construct(
        OrderDetailRepository $orderDetailRepository,
        OrderRepository $orderRepository, 
        ProductDetailRepository $productDetailRepository
    )
    {
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->productDetailRepository = $productDetailRepository;
    }

    protected function createOrder($user_id, $total_price)
    {
        return $this->orderRepository->create(['user_id'=> $user_id, 'status'=>0, 'total_price' => $total_price]);
    }

    protected function addProduct($order_detail)
    {
        $item = $this->orderDetailRepository->create($order_detail);
        return $item;
    }

    public function cart($user_id, $order_detail)
    {
        DB::beginTransaction();
        try{
            $item = $this->orderRepository->getModel()->where('user_id', $user_id)->where('status', 0);
            $price = $this->productDetailRepository->getById($order_detail['product_detail_id'])->price;
            $check_order = $item->first();
            if(!$check_order){
                $total = $price * $order_detail['quantity'];
                $order = $this->createOrder($user_id, $total);
                $order_detail['order_id'] = $order->id;
                $order_detail['price'] = $total;
                $this->addProduct($order_detail);
            }else{
                $check = $this->orderDetailRepository->getWhere('product_detail_id', $order_detail['product_detail_id'])->first();
                if($check){
                    $quantity = $check->quantity + $order_detail['quantity'];
                    $total = $price * $quantity;
                    $this->orderDetailRepository->update($check, ['quantity' => $quantity, 'price' => $total]);
                    $total_price_variant = 0;
                    foreach($check_order->order_details()->get() as $value ){
                        if($value->product_detail_id != $order_detail['product_detail_id']){
                            $total_price_variant += $value->price;
                        }
                    }
                    $this->orderRepository->update($check_order, ['total_price'=> $total + $total_price_variant]);
                }else{
                    $order_detail['price'] = $price * $order_detail['quantity'];
                    $order_detail['order_id'] = $check_order->id;
                    $this->orderDetailRepository->create($order_detail);
                    $total_price_variant = 0;
                    foreach($check_order->order_details()->get() as $value ){
                        $total_price_variant += $value->price;
                    }
                    $this->orderRepository->update($check_order, ['total_price'=> $total_price_variant]);
                }
            }
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            throw new Exception($e);
        }
        
    }

    public function getOrder()
    {
        $data = $this->orderRepository->getModel()
        ->where('user_id', request()->user()->id)
        ->where('status', 0)
        ->first();
        return $data;
    }

    public function updateProduct($order_detail, $order_id)
    {
        DB::beginTransaction();
        try {
            foreach($order_detail as $key=>$value){
                $number_product = $this->productDetailRepository->getModel()->where('id', $key)->first()->quantity - $value;
                // dd($number_product);
                $this->productDetailRepository->getModel()->where('id', $key)->update(['quantity'=>$number_product]);
            }
            $this->orderRepository->getById($order_id)->update(['status'=>1]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception($e);
        }
        
    }
}