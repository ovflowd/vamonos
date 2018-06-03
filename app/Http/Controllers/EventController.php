<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
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

        foreach ($places as $place){
            $place->guests = ERRO AQUI!!! =D
        }


        return $places;
    }
}