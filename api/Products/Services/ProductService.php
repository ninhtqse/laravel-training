<?php 

namespace Api\Products\Services;

use Module\Products\Repositories\ProductRepository;


class ProductService{

    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }


    public function getAll($options = [])
    {
        $data = $this->productRepository->getWhereArrayWithPagination([], 'products', $options);
        return $data;
    }

}