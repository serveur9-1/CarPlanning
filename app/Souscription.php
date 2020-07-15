<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souscription extends Model
{

    protected $table = 'suscribers';

    protected $fillable = [
        'marque',
        'model',
        'serie',
        'type_energie',
        'immatriculation',
        'kilometrage',
        'expire_visite',
        'expire_assurance',
        'numero_payement',
        'numero',
        'email',
        'is_pro',
        'is_active',
        'parrain'
    ];
}
