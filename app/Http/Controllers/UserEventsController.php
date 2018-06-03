<?php

namespace App\Http\Controllers;

use App\UsersPlaces;
use Laravel\Lumen\Routing\Controller;

class UsersPlacesController extends Controller
{
    public function store(Request $request){
        $obj = UsersPlaces::create($request->all());
        return response()->json($obj);
    }

    public function delete($id){
        $obj  = UsersPlaces::find($id);
        $obj->delete();
        return response()->json('Removed successfully.');
    }
}
