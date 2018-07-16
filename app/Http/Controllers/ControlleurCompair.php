<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:06
 */

namespace monEcommerce\Http\Controllers;


class ControlleurCompair extends Controller
{

    public function afficherComparer(){
        return view('pages/compair');
    }

}