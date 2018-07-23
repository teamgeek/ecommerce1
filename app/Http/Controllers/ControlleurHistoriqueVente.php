<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 21/07/2018
 * Time: 16:44
 */

namespace monEcommerce\Http\Controllers;


class ControlleurHistoriqueVente extends Controller
{
    public function afficherHistoriqueVente(){
        return view('pagesAdministration/historiquevente');
    }

}