<?php 

namespace Module\Products\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Products\Models\OrderDetail;

class OrderDetailRepository extends Repository
{
    public function getModel()
    {
        return new OrderDetail();
    }
}