<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:10
 */

namespace monEcommerce\Http\Controllers;


class ControlleurTac extends Controller
{

    public function afficherTac(){
        return view('pages/tac');
    }

}