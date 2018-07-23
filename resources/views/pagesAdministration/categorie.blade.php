@extends("ModelAdmin")

@section("barrehaut")

    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="active">Categorie</li>
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
                    Table Categories
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Code</th>
                                <th class="text-center">Nom Categorie</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB006557561</td>
                                <td class="text-center">TEE SHIRT</td>
                                <td class="text-center"><a href="#" class="btn btn-success">Modifier</a></td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB006787</td>
                                <td class="text-center">CHAUSSURES</td>
                                <td class="text-center"><a href="#" class="btn btn-success">Modifier</a></td>
                                <td class="text-center"> <a href="#" class="btn btn-danger">Supprimer</a></td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">AB0U6T67601</td>
                                <td class="text-center">TELEPHONE PORTABLE</td>
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

