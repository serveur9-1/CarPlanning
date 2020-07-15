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
                               <h3 class="title-5 m-b-25">Nos utilisateurs</h3>
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-print"></i>Imprimé en csv</button>
                            </div>
                        </div>

                        <div class="table-responsive m-b-40 text-center">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>Noms</th>
                                        <th>Prenoms</th>
                                        <th>Poste</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sande </td>
                                        <td>Franck oscar</td>
                                        <td>Censeur</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="admin_liste.html" data-toggle="tooltip" data-placement="top" title="Voir">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
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
                                        <td>Aboudramane</td>
                                        <td>Educateur</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="admin_liste.html" data-toggle="tooltip" data-placement="top" title="Voir">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
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
                                        <td>Michael Junior moussouba</td>
                                        <td>adjoint-censeur</td>
                                       <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="admin_liste.html" data-toggle="tooltip" data-placement="top" title="Voir">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
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
                                        <td>Salimata</td>
                                        <td>educateur</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="admin_liste.html" data-toggle="tooltip" data-placement="top" title="Voir">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
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
                                        <td>Dorcas Micheline</td>
                                        <td>Conseillier d'orientation</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="admin_liste.html" data-toggle="tooltip" data-placement="top" title="Voir">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
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
                                        <td>Sandrine</td>
                                        <td>Directeur technique</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="admin_liste.html" data-toggle="tooltip" data-placement="top" title="Voir">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
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
                                        <td>Koffi</td>
                                        <td >superviseur</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" href="admin_liste.html" data-toggle="tooltip" data-placement="top" title="Voir">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
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