<?php


namespace App\Repositories;

use App\Models\City;

class CityRepository
{
    public function search($search)
    {
        return City::where('name', 'like', "%{$search}%")->orderBy("region_id")->get();
    }
}
