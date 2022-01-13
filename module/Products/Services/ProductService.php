<?php 

namespace Module\Products\Services;

use Module\Products\Repositories\ProductRepository;
use Module\Products\Repositories\ProductDetailRepository;
use Module\Products\Repositories\AttributeProductRepository;

class ProductService
{
    protected $productRepository;

    protected $productDetailRepository;

    protected $attributeProductRepository;

    public function __construct(
        ProductRepository $productRepository, 
        ProductDetailRepository $productDetailRepository, 
        AttributeProductRepository  $attributeProductRepository
        )
    {
        $this->productRepository =  $productRepository;
        $this->productDetailRepository =  $productDetailRepository;
        $this->attributeProductRepository =  $attributeProductRepository;
    }

    public function create($products, $name, $productDetail,$attributeProduct)
    {

        \DB::begintransaction();
        try {
            $product['name'] = $name;
            $product = $this->productRepository->create($products);
            $data['product'] = $product;
            $product_details = [];
            $product_attributes = [];
            foreach($productDetail as $key => $value){
                $value['name'] = $name;
                $value['product_id']    = $product->id;
                $value['id']            = (string)\Str::uuid();
                $product_details[]      = $value;

                foreach($attributeProduct[$key] as $k=>$item){
                    $attribute['product_detail_id'] = $value['id'];
                    $attribute['attribute_id']      = $k;
                    $attribute['value']             = $item;
                    $attribute['id']                = (string)\Str::uuid();
                    $product_attributes[]           = $attribute;
                }
            }
            $this->productDetailRepository->getModel()->insert($product_details);
            $this->attributeProductRepository->getModel()->insert($product_attributes);

            \DB::commit();
        } catch (\Exception $e) {
           \DB::rollback();
           throw $e;
        }
        
    }


    public function getAll()
    {
        $data = $this->productDetailRepository->get();
        // dd($data->)
        return $data;
    }

    public function editCategoryId($productId, $categoryId)
    {
        $this->productRepository->getModel()->where('id', $productId)->update($categoryId);
    }


}