@extends('layout')
@section('title','Kilométrage')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h2 class="title-1 m-b-25">Souscritption</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Informations </strong>
                            <small> Véhicule</small>
                        </div>
                        <form action="" method="post" novalidate="novalidate" class="row col-lg-12">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="select" class=" form-control-label">Immatriculation</label>
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="vat" class=" form-control-label">Nouveau Kilométrage</label>
                                            <input type="text" id="vat" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-info mb-3 ml-3">
                                    <span id="payment-button-amount">Soumettre</span>
                                    <span id="payment-button-sending" style="display:none;">envoie...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
