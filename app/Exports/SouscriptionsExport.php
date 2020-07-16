<?php

namespace App\Exports;

use App\Souscription;
use Maatwebsite\Excel\Concerns\FromCollection;

class SouscriptionsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //$souscription = new Souscription();

        if(auth()->user()->is_admin){
            return Souscription::all();
        }else{
            return Souscription::all()->where('user_id', auth()->user()->id);
        }
    }
}
