<?php

namespace App\Services\Sport\Http\Controllers;

use App\Data\Models\Sport;
use App\Services\Sport\Features\AddSportFeature;
use App\Services\Sport\Features\ListSportsFeature;
use Lucid\Units\Controller;

class SportController extends Controller
{
    public function index()
    {
        return $this->serve(ListSportsFeature::class);
    }

    public function add()
    {
        return $this->serve(AddSportFeature::class);
    }
}
