<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Events;

class EventController extends Controller
{
    /**
     * Retrieve all the Events
     *
     * @return Events[]|\Illuminate\Database\Eloquent\Collection
     */
    public function retrieve()
    {
        $places = Events::all();

        foreach ($places as $place) {
            $place->guests = '';
        }

        return $places;
    }

    /**
     * Start an Event
     *
     * @return \Illuminate\View\View
     */
    public function start()
    {
        return view('event.start');
    }

    /**
     * Invite Friends to an Event
     *
     * @return \Illuminate\View\View
     */
    public function invite()
    {
        return view('event.invite');
    }
}