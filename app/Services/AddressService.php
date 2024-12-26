<?php

namespace App\Services;

use App\Repositories\RegionRepository;
use App\Repositories\CityRepository;
use App\Repositories\StreetRepository;

class AddressService
{
    protected $regionRepo;
    protected $cityRepo;
    protected $streetRepo;

    public function __construct(RegionRepository $regionRepo, CityRepository $cityRepo, StreetRepository $streetRepo)
    {
        $this->regionRepo = $regionRepo;
        $this->cityRepo = $cityRepo;
        $this->streetRepo = $streetRepo;
    }

    public function searchAddresses($search)
    {
        return [
            'regions' => $this->regionRepo->search($search),
            'cities' => $this->cityRepo->search($search),
            'streets' => $this->streetRepo->search($search),
        ];
    }
}
