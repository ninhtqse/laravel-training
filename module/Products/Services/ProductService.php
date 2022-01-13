<?php

namespace Module\Products\Services;

use Module\Products\Repositories\AttributeProductRepository;
use Module\Products\Repositories\AttributeRepository;
use Module\Products\Repositories\ProductRepository;
use Module\Products\Repositories\ProductDetailRepository;

class ProductService
{
    protected $productRepository;

    protected $productDetailRepository;

    protected $attributeRepository;

    protected $attributeProductRepository;

    public function __construct(
        ProductRepository $productRepository,
        ProductDetailRepository $productDetailRepository,
        AttributeRepository $attributeRepository,
        AttributeProductRepository $attributeProductRepository
    )
    {
        $this->productRepository =  $productRepository;
        $this->productDetailRepository =  $productDetailRepository;
        $this->attributeRepository =  $attributeRepository;
        $this->attributeProductRepository =  $attributeProductRepository;
    }

    public function create($products, $productDetails, $attributeProducts)
    {
        \DB::beginTransaction();
        try {
            $product = $this->productRepository->create($products);
            $productDetailData = [];
            $attributeProductData = [];
            foreach ($productDetails as $key => $productDetail) {
                $productDetail['product_id'] = $product->id;
                $productDetail['id']         = (string)\Str::uuid();
                $productDetailData[] = $productDetail;
                foreach ($attributeProducts[$key] as $k => $attributeProduct){
                    $attributeProductData[] = [
                        'id' => (string)\Str::uuid(),
                        'product_detail_id' => $productDetail['id'],
                        'attribute_id' => $k,
                        'value' => $attributeProduct,
                    ];
                }
            }
            $this->productDetailRepository->getModel()->insert($productDetailData);
            $this->attributeProductRepository->getModel()->insert($attributeProductData);
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        }
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
