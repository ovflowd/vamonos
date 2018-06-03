<?php

namespace App\Http\Controllers;

use App\Events;
use App\User;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;

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
    public function store(Request $request)
    {
        $obj = Events::create($request->all());

        return response()->json($obj);
    }

    /**
     * Delete an User
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(int $id)
    {
        $obj = User::find($id);
        $obj->delete();

        return response()->json('Removed successfully.');
    }

    /**
     * Get an User
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOne(int $id)
    {
        $obj = User::find($id);

        return response()->json($obj);
    }

    /**
     * Redirect to Facebook Authentication
     *
     * @return mixed
     */
    public function facebook()
    {
        return Socialite::with('facebook')->redirect();
    }

    /**
     * Facebook Callback
     *
     * @return mixed
     */
    public function facebookCallback()
    {
        $facebook = Socialite::with('facebook')->user();

        $user = User::where('facebook', $facebook->id)->first();

        if ($user) {
            $user->update(['session_token' => hex2bin(openssl_random_pseudo_bytes(20))]);

            return $user->session_token;
        }

        return User::create([
            'name' => $facebook->name,
            'email' => $facebook->email,
            'facebook' => $facebook->id,
            'session_token' => hex2bin(openssl_random_pseudo_bytes(20))
        ])->session_token;
    }
}
