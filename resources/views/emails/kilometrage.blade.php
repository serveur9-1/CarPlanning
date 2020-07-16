@extends('layout_mail')

@section('content')
    <div class="jumbotron">
         Carplanning : vous venez de mettre à jour votre kilométrage.  Marque <strong>{{ $marque }}</strong>, immatriculation <strong>{{ $immatriculation }}</strong>, ancien dernier kilométrage entré le « date de l’ancienne entrée »,  « xxx » , nouveau kilométrage entré le « date de la nouvelle entrée » « xxxx »
    </div>
@stop
