@extends('layout')
@section('title','Kilométrage')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h2 class="title-1 m-b-25">Souscription</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Informations </strong>
                            <small> Véhicule</small>
                        </div>
                        <form action="{{ route('kilometrage.update') }}" method="post" class="row col-lg-12">
                            @csrf
                            @method('PUT')
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="select" class=" form-control-label">Immatriculation</label>
                                                    <select name="immatricule" id="select" class="form-control">
                                                        <option value="0" disabled>Please select</option>
                                                        @foreach($items as $item)
                                                            <option>{{ $item->immatriculation }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="vat" class=" form-control-label">Nouveau Kilométrage</label>
                                            <input value="{{old('kilometrage')}}" placeholder="xxxkm/h" type="text" id="vat" name="kilometrage" class="form-control">
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
