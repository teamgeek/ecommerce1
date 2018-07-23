<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 21/07/2018
 * Time: 16:43
 */

namespace monEcommerce\Http\Controllers;


class ControlleurClient extends Controller
{
    public function afficherClient(){
        return view('pagesAdministration/client');
    }

}