<?php 

namespace Module\Products\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Products\Models\Product_detail;

class ProductDetailRepository extends Repository
{
    public function getModel()
    {
        return new Product_detail();
    }
}