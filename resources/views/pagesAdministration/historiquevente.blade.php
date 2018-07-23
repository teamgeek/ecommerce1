@extends("ModelAdmin")

@section("barrehaut")

    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="active">Mon historique de vente</li>
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
                    Table historique vente
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Numero facture</th>
                                <th class="text-center">Date livraison</th>
                                <th class="text-center">Moyens paiement</th>
                                <th class="text-center">Montant</th>
                                <th class="text-center">Code client</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">01/01/2018</td>
                                <td class="text-center">ORANGE MONEY</td>
                                <td class="text-center">15 000</td>
                                <th class="text-center">U88768U</th>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">01/11/2018</td>
                                <td class="text-center">MTN MONEY</td>
                                <td class="text-center">16 000</td>
                                <th class="text-center">U88768U</th>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB001</td>
                                <td class="text-center">01/01/2018</td>
                                <td class="text-center">CB</td>
                                <td class="text-center">15 000</td>
                                <th class="text-center">U43435U</th>
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

