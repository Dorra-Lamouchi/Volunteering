<?php

namespace App\Http\Controllers;
Use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('aboutus');
    }
}
