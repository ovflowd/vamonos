<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\View\View;
use App\Events;

class EventController extends Controller
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