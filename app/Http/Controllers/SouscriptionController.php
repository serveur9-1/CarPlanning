<?php

namespace App\Http\Controllers;

use App\Http\Requests\souscriptionRequest;
use App\Mail\KilometrageMail;
use App\Mail\SouscriptionMail;
use App\Marque;
use App\Souscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $data = [];

        if(auth()->user()->is_admin){
            $data = Souscription::all();
        } else {
            $data = Souscription::all()->where('user_id',auth()->user()->id);
        }

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
    public function store(souscriptionRequest $request)
    {
        //dd($request->all());
        $new_item = new Souscription();
        $new_item->newQuery()->create([
            'marque' => $request->marque,
            'model' => $request->model,
            'serie' => $request->serie,
            'type_energie' => $request->energie,
            'immatriculation' => $request->immatriculation,
            'kilometrage' => $request->kilometrage,
            'expire_visite' => $request->visite,
            'expire_assurance' => $request->assurance,
            'numero_payement' => $request->paiement,
            'numero' => $request->numero,
            'email' => $request->email,
            'parrain' => $request->parrain,
            'user_id' => auth()->user()->id,
            'new_updated' => date("Y-m-d H:m:s"),
        ]);

        return redirect()->back()->with('success',"eService , vous remercie pour votre souscription au service CarPlanning. Vous allez recevoir une confirmation par e-mail/sms. Bonne route !");


    }


    public function kilo_create()
    {
        $_subs = new Souscription();
        $kilo = $_subs->newQuery()->select(['id','immatriculation', 'kilometrage'])->get();

        return View('suscriber.kilometrage.kilometrage')->with('items',$kilo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Souscription  $souscription
     * @return \Illuminate\Http\Response
     */

    public function kilo_update(Request $request)
    {
        $validated = $request->validate([
            'immatricule' => 'required',
            'kilometrage' => 'required',
        ]);

        $_subs = new Souscription();
        $kilo = $_subs->newQuery()->where("immatriculation",$validated['immatricule'])->first();


        $kilo->kilometrage = $validated['kilometrage'];
        $kilo->old_updated = $kilo->new_updated;
        $kilo->new_updated = date("Y-m-d H:m:s");
        $kilo->save();

        // Envoie de mail
        Mail::send(new KilometrageMail($kilo));

        return redirect()->back()->with('success',"eServices vous remercie pour votre mise à jour de kilométrage pour le suivi CarPlanning. Vous allez recevoir une confirmation par email / sms . Bonne route !");

    }

    public function _switch($id , $enable)
    {

        $suscr = Souscription::findOrFail($id);
        if($enable){

            $suscr->is_active = false;
            $suscr->save();
        }
        else{
            $suscr->is_active = true;
            $suscr->save();
        }

        // Envoie de mail
        Mail::send(new SouscriptionMail($suscr));

        return redirect()->route('souscriptions.index')->with('success',"Vous avez changé le statut de la souscription avec succès");
    }
}
