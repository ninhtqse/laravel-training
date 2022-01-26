<?php
  
namespace Api\Products\Controllers;

use Infrastructure\Http\Controller;
use Api\Products\Services\ProductService;
use Infrastructure\Libraries\Response;

class ProductController extends Controller
{
    protected $productService;
    protected $response;

    public function __construct(ProductService $productService, Response $response)
    {
        $this->productService = $productService;
        $this->response = $response;
    }


    public function getAll()
    {
        $resourceOption = $this->parseResourceOptions();
        // dd($resourceOption);
        $data = $this->productService->getAll($resourceOption);
        return $this->response->renderSuccess('LWS001', $data);
    }


}