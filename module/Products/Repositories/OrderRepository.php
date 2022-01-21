<?php 

namespace Module\Products\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Products\Models\Order;

class OrderRepository extends Repository
{
    public function getModel()
    {
        return new Order();
    }
}