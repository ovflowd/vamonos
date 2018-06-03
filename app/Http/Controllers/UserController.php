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
}
