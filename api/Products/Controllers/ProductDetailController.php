<?php
  
namespace Api\Products\Controllers;

use Infrastructure\Http\Controller;
use Api\Products\Services\ProductService;
use Api\Products\Services\ProductDetailService;
use Infrastructure\Libraries\Response;

class ProductDetailController extends Controller
{
    protected $productDetailService;
    protected $response;

    public function __construct(ProductDetailService $productDetailService, Response $response)
    {
        $this->productDetailService = $productDetailService;
        $this->response = $response;
    }

    public function getAll()
    {
        $resourceOption = $this->parseResourceOptions();
        $data = $this->productDetailService->getAll($resourceOption);
        return $this->response->renderSuccess('LWS001', $data);
    }
}