<?php

namespace App\Http\Controllers;

use App\Places;
use Laravel\Lumen\Routing\Controller;

class PlaceController extends Controller
{
    /**
     * Retrieve all the Places
     *
     * @return Places[]|\Illuminate\Database\Eloquent\Collection
     */
    public function retrieve()
    {
        $places = Places::all();

        return $places;
    }
}
