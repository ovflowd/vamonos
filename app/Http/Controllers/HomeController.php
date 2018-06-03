<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * This action it's used
     *
     * @return View
     */
    public function index()
    {
        return view('login');
    }
}
