<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:07
 */

namespace monEcommerce\Http\Controllers;


class ControlleurContact extends Controller
{
    public function afficherContact(){
        return view('pages/contact');
    }

}