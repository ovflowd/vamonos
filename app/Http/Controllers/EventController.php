<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $events = Events::all();

        foreach ($events as $event) {
            $event->owner = $event->owner()->get();
            $event->guests = $event->guests()->get();
            $event->places = $event->places()->get();
        }

        return $events;
    }

    /**
     * Start an Event
     *
     * @param string $startCode
     * @return \Illuminate\View\View
     */
    public function start(string $startCode)
    {
        return view('event.start', compact('startCode'));
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

    /**
     * Wait until the Algorithm Loads the Data
     *
     * @return \Illuminate\View\View
     */
    public function wait()
    {
        return view('event.wait');
    }

    /**
     * Show the Algorithm Results
     *
     * @param array $results
     * @return \Illuminate\View\View
     */
    public function results(array $results)
    {
        return view('event.results', compact('results'));
    }

    /**
     * Store a new Event
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $obj = Events::create($request->all());

        return response()->json($obj);
    }

    /**
     * Delete an Event
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(int $id)
    {
        $obj = Events::find($id);
        $obj->delete();

        return response()->json('Removed successfully.');
    }

    /**
     * Don't die.
     *
     * @param int $id
     */
    public function calculateBestPlace(int $id)
    {
        $event = Events::where("id", $id)->get();

        dd($event->name);
    }
}