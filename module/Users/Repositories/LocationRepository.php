<?php 

namespace Module\Users\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Module\Users\Models\Location;

class LocationRepository extends Repository
{
    public function getModel()
    {
        return new Location();
    }
}