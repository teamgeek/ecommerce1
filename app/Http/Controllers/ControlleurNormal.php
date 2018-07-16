<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:08
 */

namespace monEcommerce\Http\Controllers;


class ControlleurNormal extends Controller
{

    public function afficherDelivery(){
        return view('pages/normal');
    }

}