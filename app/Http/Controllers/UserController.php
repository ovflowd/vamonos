<?php

namespace App\Http\Controllers;

use App\Events;
use App\User;
use Illuminate\Http\Request;
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

    /**
     * Store an User
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $obj = Events::create($request->all());

        return response()->json($obj);
    }

    /**
     * Delete an User
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(int $id){
        $obj  = User::find($id);
        $obj->delete();

        return response()->json('Removed successfully.');
    }
}
