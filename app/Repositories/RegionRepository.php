<?php


namespace App\Repositories;

use App\Models\Region;

class RegionRepository
{
    public function search($search)
    {
        return Region::where('name', 'like', "%{$search}%")->get();
    }
}
