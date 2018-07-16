<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:08
 */

namespace monEcommerce\Http\Controllers;


class ControlleurLogin extends Controller
{

    public function afficherLogin(){
        return view('pages/login');
    }

}