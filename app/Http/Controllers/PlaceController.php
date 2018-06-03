<?php

namespace App\Http\Controllers;

use App\Events;
use App\Places;
use Exception;
use GoogleMaps\Facade\GoogleMapsFacade;
use Illuminate\Http\Request;
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

    /**
     * Store a Place
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
     * Delete a Place
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(int $id)
    {
        $obj = Places::find($id);
        $obj->delete();

        return response()->json('Removed successfully.');
    }

    /**
     * Retrieve Places from Nearest Path
     *
     * @param string $location
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(string $location)
    {
        try {
            $response = GoogleMapsFacade::load('geocoding')
                ->setParam(['address' => $location])
                ->setEndpoint('json')
                ->get();

            $places = $response->results;

            return response()->json($places);
        } catch (Exception $e) {
            return response()->json('');
        }
    }
}
