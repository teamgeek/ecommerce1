<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 21/07/2018
 * Time: 18:46
 */

namespace monEcommerce\Http\Controllers;


class ControlleurCommande extends Controller
{
    public function afficherCommande(){
        return view('pagesAdministration/commande');
    }
}