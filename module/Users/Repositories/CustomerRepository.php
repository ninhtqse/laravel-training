<?php 

namespace Module\Users\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Users\Models\Customer;

class CustomerRepository extends Repository
{
    public function getModel()
    {
        return new Customer();
    }
}