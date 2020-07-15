@extends('layout')
@section('title','Conduite')
@section('content')
<style> textarea { resize: none; } </style>
 <form method="POST" action="{!! url('users') !!}" accept-charset="UTF-8">
        {!! csrf_field() !!}   
        <label for="nom">Entrez votre nom : </label>    
        <input name="nom" type="text" id="nom">    
        <input type="submit" value="Envoyer !"> 
    </form>
 @endsection