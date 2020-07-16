@extends('layout_mail')
@section('content')
    <div class="jumbotron">
        Mr/Mme, vous venez de souscrire au service CarPlanning :  Marque <strong>{{ $marque }}</strong>, immatriculation <strong>{{ $immatriculation }}</strong>, kilométrage « kilométrage actuel ». Pour un bon suivi technique de votre véhicule, carPlanning vous enverra des alertes de mise à jour régulière de votre kilométrage. Bonne route ! 
    </div>
@stop
