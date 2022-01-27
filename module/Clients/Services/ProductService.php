<?php

namespace Module\Clients\Services;

use Illuminate\Support\Str;
use Module\Products\Repositories\AttributeRepository;
use Module\Products\Repositories\ProductDetailRepository;
use Module\Products\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;
    protected $attributeRepository;

    public function __construct(ProductRepository $productRepository, AttributeRepository $attributeRepository)
    {
        $this->productRepository = $productRepository;
        $this->attributeRepository = $attributeRepository;
    }

    public function getById($id)
    {
        $attributes = $this->attributeRepository->get();
        $data = $this->productRepository->getById($id);
        return [$data, $attributes];
    }
}