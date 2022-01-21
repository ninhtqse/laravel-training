<?php 

namespace Module\Users\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Users\Models\OrderDetail;

class OrderDetailRepository extends Repository
{
    public function getModel()
    {
        return new OrderDetail();
    }
}