<?php

    namespace Api\Locations\Repositories;

    use Infrastructure\Database\Eloquent\Repository;
    use Api\Locations\Models\Location;

    class LocationRepository extends Repository
    {
        public function getModel()
        {
            return new Location();
        }
    }
