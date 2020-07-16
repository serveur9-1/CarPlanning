@extends('layout_mail')

@section('content')
    <div class="jumbotron">
         Carplanning : vous venez de mettre à jour votre kilométrage.  Marque <strong>{{ $marque }}</strong>, immatriculation <strong>{{ $immatriculation }}</strong>, ancien dernier kilométrage entré le <strong>{{ $old }}</strong>,  « xxx » , nouveau kilométrage entré le <strong>{{ $new }}</strong> <strong>{{ $newkilometrage }}</strong>
    </div>
@stop
