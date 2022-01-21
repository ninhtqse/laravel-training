<?php 

namespace Module\Users\Services;

use Module\Users\Repositories\OrderDetailRepository;
use Module\Users\Repositories\OrderRepository;
use Module\Products\Repositories\AttributeRepository;
use Module\Products\Repositories\ProductDetailRepository;
use Module\Products\Repositories\AttributeProductRepository;
use Module\Users\Repositories\LocationRepository;


class OrderService
{
    protected $orderRepository;
    protected $orderDetailRepository;
    protected $attributeRepository;
    protected $productDetailRepository;
    protected $locationRepository;
    protected $attributeProductRepository;

    public function __construct(
        OrderRepository $orderRepository, 
        OrderDetailRepository $orderDetailRepository,
        AttributeRepository $attributeRepository,
        ProductDetailRepository $productDetailRepository,
        LocationRepository $locationRepository,
        AttributeProductRepository $attributeProductRepository
        )
    {
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->attributeRepository = $attributeRepository;
        $this->productDetailRepository = $productDetailRepository;
        $this->locationRepository = $locationRepository;
        $this->attributeProductRepository = $attributeProductRepository;
    }

    public function getAll()
    {
        $data = $this->orderRepository->getModel()->paginate(5);
        return $data;
    }

    public function getById($id)
    {
        return $this->orderRepository->getById($id);
    }

    public function editStatus($orders, $id)
    {
        $item = $this->orderRepository->getById($id)->update($orders);
        return $item;
    }
}