<?php

namespace Module\Products\Services;

use Module\Products\Repositories\ProductDetailRepository;

class ProductDetailService
{
    protected $productDetailRepository;

    public function __construct( ProductDetailRepository $productDetailRepository)
    {
        $this->productDetailRepository =  $productDetailRepository;
    }

    public function create($product_details)
    {
        $this->productDetailRepository->create($product_details);
    }


    public function getAll()
    {
        $data = $this->productDetailRepository->getModel()->paginate(5);
        return $data;
    }

    public function getById($id)
    {
        $data = $this->productDetailRepository->getById($id);
        return $data;
    }

    public function edit($products, $id)
    {
        $item = $this->productDetailRepository->getById($id);
        $data = $item->update($products);
        return $data;
    }

}
