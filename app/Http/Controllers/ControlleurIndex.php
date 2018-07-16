<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 02:57
 */

namespace monEcommerce\Http\Controllers;


class ControlleurIndex extends Controller
{
    //afficher index
    public function afficherIndex(){
        return view('pages/index');
    }

}