<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suscriber extends Model
{
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
