<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function getTokens()
    {
        return view('tokens.personal-tokens');
    }

    public function getClients()
    {
        return view('tokens.personal-clients');
    }

    public function getAuthorizedClients()
    {
        return view('tokens.authorized-clients');
    }

    public function index()
    {
        return view('home');
    }

}
