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

    public function store(Request $request){
        $obj = Events::create($request->all());
        return response()->json($obj);
    }

    public function delete($id){
        $obj  = Places::find($id);
        $obj->delete();
        return response()->json('Removed successfully.');
    }
}
