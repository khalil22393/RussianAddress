<?php


namespace App\Repositories;

use App\Models\Street;

class StreetRepository
{
    public function search($search)
    {
        return Street::where('name', 'like', "%{$search}%")->orderBy("city_id")->get();
    }
}
