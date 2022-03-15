<?php

namespace App\Services\Sport\Http\Controllers;

use App\Data\Models\Sport;
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
    }
}
