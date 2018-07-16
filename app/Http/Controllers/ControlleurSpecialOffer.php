<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:10
 */

namespace monEcommerce\Http\Controllers;


class ControlleurSpecialOffer extends Controller
{

    public function afficherSpecialOffre(){
        return view('pages/special_offer');
    }

}