<?php

namespace App\Http\Controllers;

use App\Marque;
use App\Souscription;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SouscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Souscription::all();
        return view('suscriber.dashboardP.suscribers')->with('items', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marques = Marque::all();
        return view('suscriber.souscription.souscription')->with('marques', $marques);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function show(Souscription $souscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Souscription $souscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Souscription $souscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Souscription  $souscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Souscription $souscription)
    {
        //
    }
}
