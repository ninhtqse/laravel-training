<?php 

namespace Api\Locations\Services;

use Api\Locations\Repositories\LocationRepository;


class LocationService{

    protected $locationRepository;

    public function __construct(LocationRepository $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }


    public function getAll($options = [])
    {
        $data = $this->locationRepository->getWhereArrayWithPagination([], 'locations', $options);
        return $data;
    }

    public function getDistrict($request)
    {
        $data = $this->locationRepository->getModel()->where('');
    }



}