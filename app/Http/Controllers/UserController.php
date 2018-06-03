<?php

namespace App\Http\Controllers;

use App\User;
use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{
    /**
     * Retrieve all the Users
     *
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function retrieve()
    {
        $users = User::all();

        return $users;
    }

    public function store(Request $request){
        $obj = Events::create($request->all());
        return response()->json($obj);
    }

    public function delete($id){
        $obj  = User::find($id);
        $obj->delete();
        return response()->json('Removed successfully.');
    }
}
