<?php

namespace Api\Locations\Repositories;

use Infrastructure\Database\Eloquent\Repository;
use Api\Locations\Models\Locations;

class LocationRepository extends Repository
{
    public function getModel()
    {
        return new Locations();
    }
}