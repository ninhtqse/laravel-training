<?php

namespace Module\Products\Services;

use Module\Products\Repositories\AttributeProductRepository;
use Module\Products\Repositories\ProductDetailRepository;
use Module\Products\Repositories\AttributeRepository;
use Module\Products\Repositories\ProductRepository;
use Infrastructure\Libraries\HelperFunction;

class ProductService
{
    protected $helperFunction;

    protected $productRepository;

    protected $productDetailRepository;

    protected $attributeRepository;

    protected $attributeProductRepository;

    public function __construct(
        HelperFunction $helperFunction,
        ProductRepository $productRepository,
        ProductDetailRepository $productDetailRepository,
        AttributeRepository $attributeRepository,
        AttributeProductRepository $attributeProductRepository
    )
    {
        $this->helperFunction               = $helperFunction;
        $this->productRepository            =  $productRepository;
        $this->productDetailRepository      =  $productDetailRepository;
        $this->attributeRepository          =  $attributeRepository;
        $this->attributeProductRepository   =  $attributeProductRepository;
    }

    public function getAll()
    {
        $data = $this->productRepository->getModel()->paginate(5);
        return $data;
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
                $productDetail = $this->helperFunction->saveImage($productDetail,'images');
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

    public function getProductById($productId)
    {
        return $this->productRepository->getById($productId);
    }

    public function edit($productId, $products, $productDetails, $attributeProducts){
        \DB::beginTransaction();
        try {
            // delete product_details and attribute_products
            $productDetailArray = $this->productRepository->getById($productId)->product_details;
            $ImageProductDetails = [];
            foreach ($productDetailArray as $productDetail){
                $ImageProductDetails[$productDetail->id] = $productDetail->images;
                $productDetail->attributeProducts()->delete();
            }
            $this->productRepository->getById($productId)->product_details()->delete();

            // update product
            $product = $this->productRepository->getModel()->where('id',$productId);
            $product->update($products);

            // add product_details and attribute_products
            $productDetailData = [];
            $attributeProductData = [];
            foreach ($productDetails as $key => $productDetail) {
                $productDetail['product_id'] = $productId;
                $productDetail['id']         = (string)\Str::uuid();
                if (array_key_exists('images', $productDetail)) {
                    if (array_key_exists($key, $ImageProductDetails)) {
                        $this->helperFunction->deleteImage($ImageProductDetails[$key]);
                    }
                    $productDetail = $this->helperFunction->saveImage($productDetail,'images');
                }
                else{
                    $productDetail['images'] = $ImageProductDetails[$key];
                }
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

    public function delete($productId)
    {
        \DB::beginTransaction();
        try {
            // delete product_details and attribute_products
            $productDetailArray = $this->productRepository->getById($productId)->product_details;
            foreach ($productDetailArray as $productDetail){
                $this->helperFunction->deleteImage($productDetail->images);
                $productDetail->attributeProducts()->delete();
            }
            $this->productRepository->getById($productId)->product_details()->delete();
            //delete products
            $this->productRepository->getById($productId)->delete();
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        }
    }
}
