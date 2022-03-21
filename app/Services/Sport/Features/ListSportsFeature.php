<?php

namespace App\Services\Sport\Features;

use App\Domains\Sport\Jobs\GetSportsJob;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class ListSportsFeature extends Feature
{
    public function handle(Request $request)
    {
        $sports = $this->run(GetSportsJob::class);

        return view('sport::welcome', ['data' => $sports]);
    }
}
