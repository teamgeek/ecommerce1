<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 21/07/2018
 * Time: 16:44
 */

namespace monEcommerce\Http\Controllers;


class ControlleurOffreSpecial extends Controller
{
    public function afficherOffre(){
        return view('pagesAdministration/offrespecial');
    }

}