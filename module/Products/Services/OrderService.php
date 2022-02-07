<?php 

namespace Module\Products\Services;

use Module\Products\Repositories\OrderDetailRepository;
use Module\Products\Repositories\OrderRepository;
use Module\Products\Repositories\AttributeRepository;
use Module\Products\Repositories\ProductDetailRepository;
use Module\Products\Repositories\AttributeProductRepository;
use Module\Users\Repositories\LocationRepository;
use Module\Users\Repositories\UserRepository;


class OrderService
{
    protected $orderRepository;
    protected $orderDetailRepository;
    protected $attributeRepository;
    protected $productDetailRepository;
    protected $locationRepository;
    protected $attributeProductRepository;
    protected $userRepository;

    public function __construct(
        OrderRepository $orderRepository, 
        OrderDetailRepository $orderDetailRepository,
        AttributeRepository $attributeRepository,
        ProductDetailRepository $productDetailRepository,
        LocationRepository $locationRepository,
        AttributeProductRepository $attributeProductRepository,
        UserRepository $userRepository
        )
    {
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->attributeRepository = $attributeRepository;
        $this->productDetailRepository = $productDetailRepository;
        $this->locationRepository = $locationRepository;
        $this->attributeProductRepository = $attributeProductRepository;
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        $data = $this->orderRepository->getModel()->paginate(5);
        return $data;
    }

    public function getById($id)
    {
        $order =  $this->orderRepository->getById($id);
        $user_id = $order->user_id;
        $user = $this->userRepository->getById($user_id);
        $province = $this->locationRepository->getModel()->where('code', $user->province_id)->first()->name;
        $district = $this->locationRepository->getModel()->where('code', $user->district_id)->first()->name;
        $commune = $this->locationRepository->getModel()->where('code', $user->commune_id)->first()->name;
        $location = $province . ','. $district . ',' . $commune;
        // dd($location);
        return [$order, $location];
    }

    public function editStatus($orders, $id)
    {
        $item = $this->orderRepository->getById($id)->update($orders);
        return $item;
    }
}