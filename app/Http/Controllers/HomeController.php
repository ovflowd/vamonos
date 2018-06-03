<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Index Page of our Application
     *
     * @return View
     */
    public function index()
    {
        $hello = 'world';

        return view('home', compact('hello'));
    }
}
