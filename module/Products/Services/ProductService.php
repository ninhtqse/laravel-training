<?php 

namespace Module\Products\Services;

use Module\Products\Repositories\ProductRepository;
use Module\Products\Repositories\ProductDetailRepository;
use Module\Products\Repositories\AttributeProductRepository;
use Infrastructure\Libraries\HelperFunction;

class ProductService
{
    protected $productRepository;

    protected $productDetailRepository;

    protected $attributeProductRepository;

    protected $helperFunction;


    public function __construct(
        HelperFunction $helperFunction,
        ProductRepository $productRepository, 
        ProductDetailRepository $productDetailRepository, 
        AttributeProductRepository  $attributeProductRepository
        )
    {
        $this->productRepository =  $productRepository;
        $this->productDetailRepository =  $productDetailRepository;
        $this->attributeProductRepository =  $attributeProductRepository;
        $this->helperFunction =  $helperFunction;
    }

    public function create($products, $name, $productDetail,$attributeProduct)
    {

        \DB::begintransaction();
        try {
            $products['name'] = $name;
            $product = $this->productRepository->create($products);
            $data['product'] = $product;
            $product_details = [];
            $product_attributes = [];
            foreach($productDetail as $key => $value){
                $value['product_id']    = $product->id;
                $value['id']            = (string)\Str::uuid();
                $value = $this->helperFunction->saveImage($value,'image');
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

    public function getByIdProduct($id)
    {
        $product = $this->productRepository->getById($id);
        $data['product'] = $product;
        $productDetail = $this->productDetailRepository->getModel()->where('product_id', $id)->get();
        $data['productDetail'] = $productDetail;
        foreach($productDetail as $key => $value){
            $attributeProduct[] = $this->attributeProductRepository->getModel()->where('product_detail_id', $value->id)->get();
        }
        $data['attributeProduct'] = $attributeProduct;
        return $data;
    }



    public function edit($id, $data)
    {
        \DB::begintransaction();
        try {
            $productRaw =$this->productRepository->getById($id);
            [$products, $product_details, $attribute_products] = $this->splitArray($data);
            [$productDetail, $attributeProducts] = $this->mapData($product_details, $attribute_products, $id);
            $this->deleteRelationship($productRaw);
            $this->productRepository->update($productRaw, $products);            
            $this->productDetailRepository->getModel()->insert($productDetail);
            $this->attributeProductRepository->getModel()->insert($attributeProducts);
            \DB::commit();
        } catch (\Exception $e) {
           \DB::rollback();
           throw $e;
        }
    }

    protected function mapData($productDetail, $attributeProducts, $productId)
    {
        $attribute_products = [];
        foreach($productDetail as $key => $value){
            if($value['id']){
                if(@$value['image']){
                    $productDetail[$key] = $this->helperFunction->saveImage($value,'image', $value['id']);
                }else{
                    $productDetail[$key]['image'] = $this->productDetailRepository->getById($value['id'])->image;
                }
            }else{
                $productDetail[$key] = $this->helperFunction->saveImage($value,'image');
            }
            $productDetail[$key]['product_id'] = $productId;

            foreach($attributeProducts[$key] as $k => $item){
                $attribute_products[] = [
                    'id'                => (string)\Str::uuid(),
                    'attribute_id'      => $k,
                    'value'             => $item,
                    'product_detail_id' => $productDetail[$key]['id']
                
                ];
            }
        }
        
        return [$productDetail, $attribute_products];
    }


    private function splitArray($data)
    {
        $products               = [];
        $product_details        = [];
        $attribute_products     = [];
        extract($data);
        return [$products, $product_details, $attribute_products];
    }

    public function deleteRelationship($product)
    {
        $productDetail = $product->product_details()->pluck('id')->toArray();
        $this->attributeProductRepository->getModel()->whereIn('product_detail_id', $productDetail)->delete();
        $product->product_details()->delete();
    }
    public function editCategoryId($productId, $categoryId)
    {
        $this->productRepository->getModel()->where('id', $productId)->update($categoryId);
    }
    

    

    


}