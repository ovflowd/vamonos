<?php

namespace App\Http\Controllers;

use App\Events;
use Laravel\Lumen\Routing\Controller;

class EventsController extends Controller
{
    /**
     * Retrieve all the Users
     *
     * @return Events[]|\Illuminate\Database\Eloquent\Collection
     */
    public function retrieve()
    {
        $places = Events::all();

        return $places;
    }
}