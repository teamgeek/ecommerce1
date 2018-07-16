<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:08
 */

namespace monEcommerce\Http\Controllers;


class ControlleurLegalNotice extends Controller
{

    public function afficherLegalNotice(){
        return view('pages/legal_notice');
    }

}