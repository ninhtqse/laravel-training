<?php 

namespace Module\Products\Services;

use Module\Products\Repositories\ProductRepository;
use Module\Products\Repositories\ProductDetailRepository;

class ProductService
{
    protected $productRepository;
    protected $product_detailRepository;

    public function __construct(ProductRepository $productRepository, ProductDetailRepository $product_detailRepository)
    {
        $this->productRepository =  $productRepository;
        $this->product_detailRepository =  $product_detailRepository;
    }

    public function create($products)
    {
        $this->productRepository->create($products);
    }

    public function getAll()
    {
        $data = $this->productRepository->getModel()->paginate(5);
        return $data;
    }

    public function editCategoryId($productId, $categoryId)
    {
        $this->productRepository->getModel()->where('id', $productId)->update($categoryId);
    }


}