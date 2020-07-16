<?php

namespace App\Http\Controllers;

use App\Souscription;
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
    public function index()
    {
        $data = Souscription::all();
        return view('suscriber.dashboardP.suscribers')->with('items', $data);
    }
}
