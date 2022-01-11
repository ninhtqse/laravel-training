<?php 

namespace Module\Categories\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Categories\Models\Category;

class CategoryRepository extends Repository
{
    public function getModel()
    {
        return new Category();
    }
}