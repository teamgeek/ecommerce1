@extends("ModelAdmin")

@section("barrehaut")

    <div class="row">
        <div class="col-md-12">
            <!--<h1 class="page-header">
                Tableau de bord <small>Accueil</small>
            </h1>-->
            <ol class="breadcrumb">
                <li class="active">Client</li>
            </ol>
        </div>
    </div>

@endsection

@section("content")

    <div class="row">
        <div class="col-md-12">

            <!--    Bordered Table  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Table Clients
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Code</th>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Prenoms</th>
                                <th class="text-center">Telephone</th>
                                <th class="text-center">Sexe</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">SYLLA</td>
                                <td class="text-center">DAOUDA</td>
                                <td class="text-center">0203749475</td>
                                <td class="text-center">M</td>
                                <td class="text-center">TEST@GMAIL.COM</td>
                                <td class="text-center">COMPTE ACTIVE</td>
                                <td class="text-center"><a href="#" class="btn btn-success">Modifier</a></td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">KAKOU</td>
                                <td class="text-center">SERAPHIN</td>
                                <td class="text-center">0203749475</td>
                                <td class="text-center">M</td>
                                <td class="text-center">TEST@GMAIL.COM</td>
                                <td class="text-center">COMPTE INACTIF</td>
                                <td class="text-center"><a href="#" class="btn btn-success">Modifier</a></td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">COULIBALY</td>
                                <td class="text-center">AICHA</td>
                                <td class="text-center">02037232375</td>
                                <td class="text-center">F</td>
                                <td class="text-center">TEST@GMAIL.COM</td>
                                <td class="text-center">COMPTE ACTIVE</td>
                                <td class="text-center"><a href="#" class="btn btn-success">Modifier</a></td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--  End  Bordered Table  -->

        </div>
    </div>


@endsection

