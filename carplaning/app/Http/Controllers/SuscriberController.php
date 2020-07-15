<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\souscriptionRequest;
use App\suscriber;

class SuscriberController extends Controller
{
    public function suscriber()
	{
		return view('suscriber.souscription.souscription');
	}

	public function kilometrage()
	{
		return view('suscriber.kilometrage.kilometrage');
	}

	//Souscription

    public function souscriptionAdd(souscriptionRequest $request)
    {
        $suscribe = new suscriber();
        
        //add to database

        $suscribe->marque = $request->marque;
        $suscribe->model = $request->model;
        $suscribe->serie = $request->serie;
        $suscribe->type_energie = $request->energie;
        $suscribe->immatriculation = $request->immatriculation;
        $suscribe->kilometrage = $request->kilometrage;
        $suscribe->expire_visite = $request->visite;
		$suscribe->expire_assurance = $request->assurance;
		$suscribe->numero_payement = $request->paiement;
        $suscribe->numero = $request->numero;
        $suscribe->email = $request->email;
		$suscribe->parrain = $request->parrain;

        $suscribe->save();

        return redirect()->back()->with('success',"Merci , Vous avez été bien enregistré. Nous allons vous contacter d'ici peu");
    }

}
