<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:09
 */

namespace monEcommerce\Http\Controllers;


class ControlleurRegister extends Controller
{
    public function afficherEnregistrement(){
        return view('pages/register');
    }

}