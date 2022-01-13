<?php 

namespace Module\Products\Services;

use Module\Products\Repositories\AttributeProductRepository;

class AttributeProductService
{
    protected $attributeProductRepository;

    public function __construct(AttributeProductRepository $attributeProductRepository)
    {
        $this->attributeProductRepository = $attributeProductRepository;
    }

    public function create($attribute_products)
    {
        $data = $this->attributeProductRepository->create($attribute_products);
        return $data;
    }
}