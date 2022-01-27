<?php 

namespace Api\Products\Services;

use Module\Products\Repositories\ProductDetailRepository;


class ProductDetailService{

    protected $productDetailRepository;

    public function __construct(ProductDetailRepository $productDetailRepository)
    {
        $this->productDetailRepository = $productDetailRepository;
    }


    public function getAll($options = [])
    {
        $data = $this->productDetailRepository->getWhereArrayWithPagination([], 'product_details', $options);
        return $data;
    }

}