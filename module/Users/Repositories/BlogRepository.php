<?php 

namespace Module\Users\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Users\Models\Blog;

class BlogRepository extends Repository
{
    public function getModel()
    {
        return new Blog();
    }
}