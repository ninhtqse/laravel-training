<?php

    namespace Api\Locations\Controllers;

    use Infrastructure\Http\Controller;
    use Api\Locations\Services\LocationService;

    class LocationController extends Controller
    {
        protected $locationService;

        public function __construct(LocationService $locationService)
        {
            $this->locationService = $locationService;
        }

        public function getAll()
        {
            $resourceOption = $this->parseResourceOptions();
            // dd($resourceOption);
            $data = $this->locationService->getAll($resourceOption);
            return $data;
        }
    }
