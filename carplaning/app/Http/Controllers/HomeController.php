<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suscriber;

class HomeController extends Controller
{
    public function home()
	{
		return view('suscriber.dashboardP.dashboard');
	}
	public function homeAdmin()
	{
		return view('administration.administrationA.adminA');
	}

	public function marque()
	{
		return view('administration.administrationA.marques');
	}

	public function suscribers()
	{
		//afficher la liste des donateur

		$all_suscribers = suscriber::all();

		return View('administration.administrationA.suscribers')->with('items',$all_suscribers);
	
	}
	public function suscribers_pro()
	{
		return view('administration.administrationA.suscribers_pro');
	}

	public function add_marques()
	{
		return view('administration.administrationA.add_marques');
	}

	public function changeStateSuscribers($id , $enable)
    {
        $suscr = suscriber::findOrFail($id);
        if($enable){

            $suscr->is_active = false;
            $suscr->save();
        }
        else{
            $suscr->is_active = true;
            $suscr->save();
        }

        return redirect()->route('suscribers')->with('success',"Vous avez changé le statut de la souscription avec succès");
    }
}


