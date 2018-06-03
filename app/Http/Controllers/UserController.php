<?php

namespace App\Http\Controllers;

use App\Events;
use App\User;
use App\UserFriend;
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
     * Retrieve all the Friends
     *
     * @param string $user (For now not used)
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function friends(string $user = '')
    {
        $friends = UserFriend::all();

        return $friends;
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
     * Get an User by it Hash
     *
     * @param string $userHash
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOne(string $userHash)
    {
        $obj = User::where('session_token', $userHash)->first();

        return response()->json($obj);
    }

    /**
     * Redirect to Facebook Authentication
     *
     * @return mixed
     */
    public function facebook()
    {
        return Socialite::with('facebook')->scopes([
            'email',
            'user_birthday',
            'user_friends'
        ])->stateless()->redirect();
    }

    /**
     * Facebook Callback
     *
     * @return mixed
     */
    public function facebookCallback()
    {
        $facebook = Socialite::with('facebook')->stateless()->user();

        $user = User::where('facebook', $facebook->id)->first();

        if ($user) {
            $user->update(['session_token' => bin2hex(openssl_random_pseudo_bytes(20))]);

            return redirect("/event/start/{$user->session_token}");
        }

        $user = User::create([
            'name' => $facebook->name,
            'email' => $facebook->email,
            'facebook' => $facebook->id,
            'session_token' => bin2hex(openssl_random_pseudo_bytes(20))
        ]);

        return redirect("/event/start/{$user->session_token}");
    }
}
