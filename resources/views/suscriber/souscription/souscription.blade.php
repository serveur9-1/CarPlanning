@extends('layout')
@section('title','Souscription')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h2 class="title-1 m-b-25">Souscritption</h2>
            <div class="row">
                <form action="{{ route('souscriptions.store') }}" method="post" class="row col-lg-12">
                    @csrf
                    @method('POST')
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
                                                        @foreach($marques as $item)
                                                        <option class="text-uppercase" value="{{$item->id}}">{{$item->noms}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('marque')
                                                        <small class="text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="vat" class=" form-control-label">Model du véhicule</label>
                                            <input value="{{ old('model') }}" type="text" id="vat" name="model" class="form-control">
                                            @error('model')
                                                <small class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="street" class=" form-control-label">Numéro de série sur la carte grise</label>
                                                <input value="{{ old('serie') }}"  type="text" name="serie" id="street" class="form-control">
                                                @error('serie')
                                                <small class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="select" class=" form-control-label">Type d'énergie</label>
                                                <select name="energie" id="select" class="form-control">
                                                    <option disabled selected value="0">Please select</option>
                                                    <option value="1">Essence</option>
                                                    <option value="2">Diesel</option>
                                                </select>
                                                @error('energie')
                                                <small class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="city" class=" form-control-label">Immatriculation</label>
                                                <input value="{{ old('immatriculation') }}"  type="text" id="city" class="form-control" name="immatriculation">
                                                @error('immatriculation')
                                                <small class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="postal-code" class=" form-control-label">Kilométrage actuel</label>
                                                <input value="value="{{ old('kilometrage') }}" " type="text" id="postal-code"  class="form-control" name="kilometrage">
                                                @error('kilometrage')
                                                <small class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="visite" class=" form-control-label">Expiration visite technique</label>
                                                <input value="{{ old('visite') }}"  type="date" name="visite" id="visite" class="form-control">
                                                @error('visite')
                                                <small class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="assurance" class=" form-control-label">Expiration assurance</label>
                                                <input value="{{ old('assurance') }}"  type="date" name="assurance" id="assurance" class="form-control">
                                                @error('assurance')
                                                <small class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </small>
                                                @enderror
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
                                                    <input value="{{ old('paiement') }}"  type="text" id="paiement" name="paiement" class="form-control">
                                                    @error('paiement')
                                                    <small class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="whatsapp" class=" form-control-label">Téléphone Whatsapp</label>
                                                    <input value="{{ old('numero') }}"  type="text" id="whatsapp" name="numero" class="form-control">
                                                    @error('numero')
                                                    <small class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email" class=" form-control-label">E-mail</label>
                                                    <input value="{{ old('email') }}"  type="email" id="email" name="email" class="form-control">
                                                    @error('email')
                                                    <small class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="parrain" class=" form-control-label">Code du parrain</label>
                                                    <input value="{{ old('parrain') }}"  type="text" id="parrain" name="parrain" class="form-control">
                                                    @error('parrain')
                                                    <small class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </small>
                                                    @enderror
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
