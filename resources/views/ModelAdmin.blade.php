<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon E-commerce</title>
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('administration')}}"><i class="fa fa-home"></i> <strong>E-Commerce</strong></a>
        </div>

    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        @yield('reduireSlide')
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a class="active-menu" href="{{route('administration')}}"><i class="fa fa-dashboard"></i>Tableau de bord</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-credit-card"></i>Mes articles<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('article')}}">Liste articles</a>
                        </li>
                        <li>
                            <a href="{{route('categorie')}}">Liste catégories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('commande')}}"><i class="fa fa-map-marker"></i>Mes commandes</a>
                </li>
                <li>
                    <a href="{{route('client')}}"><i class="fa fa-user"></i>Mes clients</a>
                </li>
                <li>
                    <a href="{{route('offrespecial')}}"><i class="fa fa-book"></i>Offres speciales</a>
                </li>
                <li>
                    <a href="{{route('historiquevente')}}"><i class="fa fa-money"></i>Historique vente</a>
                </li>

            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">


            <!--debut barre haut===========================================================-->
            @yield("barrehaut")
            <!--fin barre haut================================================================-->

            <!-- /. debut content===============================================================================  -->
            @yield('content')
            <!-- /. fin content=========================================================================  -->


            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>


            </footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>


<script src="assets/js/easypiechart.js"></script>
<script src="assets/js/easypiechart-data.js"></script>

<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>


</body>

</html>