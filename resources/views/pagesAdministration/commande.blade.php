@extends("ModelAdmin")

@section("barrehaut")

    <div class="row">
        <div class="col-md-12">
            <!--<h1 class="page-header">
                Tableau de bord <small>Accueil</small>
            </h1>-->
            <ol class="breadcrumb">
                <li class="active">Mes commandes</li>
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
                    Table Commandes
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">Numero commande</th>
                                <th class="text-center">Date commande</th>
                                <th class="text-center">Date livraison</th>
                                <th class="text-center">Moyens de paiement</th>
                                <th class="text-center">Montant</th>
                                <th class="text-center">Numero Client</th>
                                <th class="text-center">Nom et prenoms</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">AB001</td>
                                <td class="text-center">12/12/2016</td>
                                <td class="text-center">20/01/2017</td>
                                <td class="text-center">CB</td>
                                <td class="text-center">1520000</td>
                                <td class="text-center">GHHS678</td>
                                <td class="text-center">KAKOU SERAPHIN</td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <tr>
                                <td class="text-center">AB001</td>
                                <td class="text-center">12/12/2016</td>
                                <td class="text-center">20/01/2017</td>
                                <td class="text-center">CB</td>
                                <td class="text-center">1520000</td>
                                <td class="text-center">GHHS678</td>
                                <td class="text-center">KAKOU SERAPHIN</td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <tr>
                                <td class="text-center">AB001</td>
                                <td class="text-center">12/12/2016</td>
                                <td class="text-center">20/01/2017</td>
                                <td class="text-center">CB</td>
                                <td class="text-center">1520000</td>
                                <td class="text-center">GHHS678</td>
                                <td class="text-center">KAKOU SERAPHIN</td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--  End  Bordered Table  -->

            <!--    Bordered Table  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Articles commandés
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Code article</th>
                                <th class="text-center">Nom article</th>
                                <th class="text-center">Prix unitaire</th>
                                <th class="text-center">Prix de vente</th>
                                <th class="text-center">Quantité</th>
                                <th class="text-center">Reduction</th>
                                <th class="text-center">Net à payer</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">VELO</td>
                                <td class="text-center">10000</td>
                                <td class="text-center">15 000</td>
                                <td class="text-center">3</td>
                                <td class="text-center">14</td>
                                <td class="text-center">250000</td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">VELO</td>
                                <td class="text-center">10000</td>
                                <td class="text-center">15 000</td>
                                <td class="text-center">3</td>
                                <td class="text-center">14</td>
                                <td class="text-center">250000</td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">VELO</td>
                                <td class="text-center">10000</td>
                                <td class="text-center">15 000</td>
                                <td class="text-center">3</td>
                                <td class="text-center">14</td>
                                <td class="text-center">250000</td>
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

