@extends('layout-admin')
@section('title','Administration')
@section('content')
    <div class="section__content section__content--p30">
                    
            <div class="container-fluid">
                
                <div class="row m-t-30">
                    <div class="col-md-12">

                        <!-- DATA TABLE-->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                               <h3 class="title-5 m-b-25">Nos marques</h3>
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-"></i>Ajouter une marque</button>
                            </div>
                        </div>

                        <div class="table-responsive m-b-40 text-center">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>Noms de la marque</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sande </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Supprimé">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Noumbia</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Supprimé">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Yves</td>
                                       <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Supprimé">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Koné</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Supprimé">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Konan</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Supprimé">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Koua</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Supprimé">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ouattara</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Supprimé">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>
 @endsection