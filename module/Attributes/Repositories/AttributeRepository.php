<?php 

namespace Module\Attributes\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Attributes\Models\Attribute;

class AttributeRepository extends Repository
{
    public function getModel()
    {
        return new Attribute();
    }
}