<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 21/07/2018
 * Time: 13:55
 */

namespace monEcommerce\Http\Controllers;


class ControlleurAccueil extends Controller
{
    public function afficherIndex(){
        return view('pagesAdministration/accueil');
    }

}