@extends('layout')
@section('title','Administration')
@section('content')
    <div class="section__content section__content--p30">

            <div class="container-fluid">

                <div class="row m-t-30">
                    <div class="col-md-12">

                        <!-- DATA TABLE-->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                               <h3 class="title-5 m-b-25">Souscriptions</h3>
                            </div>
                            @if(Auth::user()->is_admin)
                            <div class="table-data__tool-right">
                                <a href="{{ route('export.csv') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-print"></i>Imprimer en csv</a>

                                <a href="{{ route('export.xlsx') }}" class="au-btn au-btn-icon btn-warning au-btn--small">
                                    <i class="zmdi zmdi-print"></i>Imprimer en xlsx</a>
                            </div>
                            @endif

                            @if(!Auth::user()->is_admin)
                                <div class="table-data__tool-right">
                                    <a href="{{ route('souscriptions.create') }}" class="au-btn au-btn-icon btn-danger au-btn--small">
                                        Souscrire</a>
                                    <a href="{{ route('export.csv') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-print"></i>Imprimer en csv</a>

                                    <a href="{{ route('export.xlsx') }}" class="au-btn au-btn-icon btn-warning au-btn--small">
                                        <i class="zmdi zmdi-print"></i>Imprimer en xlsx</a>
                                </div>
                            @endif
                        </div>

                        <div class="table-responsive m-b-40 text-center">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>marques</th>
                                        <th>Model</th>
                                        <th>Série</th>
                                        <th>Energie</th>
                                        <th>Immatriculation</th>
                                        <th>Kiloétrage</th>
                                        <th>Expiration visite</th>
                                        <th>Expiration assurance</th>
                                        <th>E-mail</th>
                                        <th>Status</th>
                                        @if(Auth::user()->is_admin)
                                        <th>Activer</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($items as $item)
                                    <tr>
                                        <td>{{ $item->marque }}</td>
                                        <td>{{ $item->model }}</td>
                                        <td>{{ $item->serie }}</td>
                                        <td>{{ $item->type_energie }}</td>
                                        <td>{{ $item->immatriculation }}</td>
                                        <td>{{ $item->kilometrage }}</td>
                                        <td>{{ $item->expire_visite }}</td>
                                        <td>{{ $item->expire_assurance }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>@if($item->is_pro )<span class="badge badge-success">Pro</span>@else <span class="badge badge-primary">Individuelle</span>@endif</td>
                                        @if(Auth::user()->is_admin)
                                        <td>
                                            <div class="confirm-switch">
                                                <input onchange="change{{ $item->id }}()" type="checkbox" id="confirm-switch{{ $item->id }}" @if($item->is_active) checked @endif>
                                                <label for="confirm-switch{{ $item->id }}"></label>
                                            </div>
                                            <script>
                                                function change{{ $item->id }}(){
                                                    document.getElementById("changeStateForm{{ $item->id }}").submit();
                                                }
                                            </script>
                                            <form style="display: none;" id="changeStateForm{{ $item->id }}" action="{{ route('changeStateSuscribers', ['id'=> $item->id, 'enable' => $item->is_active]) }}" method="post">
                                                @csrf
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>
 @endsection
