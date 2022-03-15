<?php

namespace App\Services\Sport\Http\Controllers;

use App\Data\Models\Sport;
use App\Services\Sport\Features\AddSportFeature;
use Lucid\Units\Controller;

class SportController extends Controller
{
    public function index()
    {
        $sport = Sport::all();
        return view('sport::welcome', ['data' => $sport]);
    }

    public function add()
    {
        return $this->serve(AddSportFeature::class);
    }
}
