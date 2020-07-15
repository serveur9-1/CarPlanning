@extends('layout')
@section('title','Souscription')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h2 class="title-1 m-b-25">Souscritption</h2>
            <div class="row">
                <form action="{{ route('souscriptionAdd') }}" method="post" class="row col-lg-12">
                    @csrf
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Informations </strong>
                                <small> Véhicule</small>
                            </div>

                            <div class="card-body card-block">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="select" class=" form-control-label">Marque du véhicule</label>
                                                    <select name="marque" id="select" class="form-control">
                                                        <option value="0" disabled>Please select</option>
                                                        <option value="1">Audi</option>
                                                        <option value="2">bmw</option>
                                                        <option value="3">cadilac</option>
                                                        <option value="1">Chevrolet</option>
                                                        <option value="2">Chrysler</option>
                                                        <option value="3">citroen</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="vat" class=" form-control-label">Model du véhicule</label>
                                            <input type="text" id="vat" name="model" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="street" class=" form-control-label">Numéo de série sur la carte grise</label>
                                                <input type="text" name="serie" id="street" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="select" class=" form-control-label">Type d'énergie</label>
                                                <select name="energie" id="select" class="form-control">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Essence</option>
                                                    <option value="2">Diesel</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="city" class=" form-control-label">Immatriculation</label>
                                                <input type="text" id="city" class="form-control" name="immatriculation">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="postal-code" class=" form-control-label">Kilométrage actuel</label>
                                                <input type="text" id="postal-code"  class="form-control" name="kilometrage">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="visite" class=" form-control-label">Expiration visite technique</label>
                                                <input type="date" name="visite" id="visite" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="assurance" class=" form-control-label">Expiration assurance</label>
                                                <input type="date" name="assurance" id="assurance" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            <strong>Informations </strong>
                                <small> Personnelle</small> 
                            </div>
                            <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="paiement" class=" form-control-label">Numéro pour le paiement</label>
                                                    <input type="text" id="paiement" name="paiement" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="whatsapp" class=" form-control-label">Téléphone Whatsapp</label>
                                                    <input type="text" id="whatsapp" name="numero" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email" class=" form-control-label">E-mail</label>
                                                    <input type="email" id="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="parrain" class=" form-control-label">Code du parrain</label>
                                                    <input type="text" id="parrain" name="parrain" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <span id="payment-button-amount">Soumettre</span>
                                            <span id="payment-button-sending" style="display:none;">envoie...</span>
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
