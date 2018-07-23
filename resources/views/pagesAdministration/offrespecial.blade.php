@extends("ModelAdmin")

@section("barrehaut")

    <div class="row">
        <div class="col-md-12">
            <!--<h1 class="page-header">
                Tableau de bord <small>Accueil</small>
            </h1>-->
            <ol class="breadcrumb">
                <li class="active">Offre special</li>
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
                    Table offre special
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Code article</th>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">reduction</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">VELO</td>
                                <td class="text-center">juste un test</td>
                                <td class="text-center">15%</td>
                                <td class="text-center"><a href="#" class="btn btn-success">Modifier</a></td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">VELO</td>
                                <td class="text-center">juste un test</td>
                                <td class="text-center">15%</td>
                                <td class="text-center"><a href="#" class="btn btn-success">Modifier</a></td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">VELO</td>
                                <td class="text-center">juste un test</td>
                                <td class="text-center">15%</td>
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

