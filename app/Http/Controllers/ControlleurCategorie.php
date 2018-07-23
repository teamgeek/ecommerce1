<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 21/07/2018
 * Time: 16:42
 */

namespace monEcommerce\Http\Controllers;


class ControlleurCategorie extends Controller
{
    public function afficherCategorie(){
        return view('pagesAdministration/categorie');
    }

}