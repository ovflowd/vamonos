<?php

namespace App\Http\Controllers;

use App\UserEvent;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class UserEventsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $obj = UserEvent::create($request->all());

        return response()->json($obj);
    }

    public function delete($id){
        $obj  = UserEvent::find($id);
        $obj->delete();

        return response()->json('Removed successfully.');
    }
}
