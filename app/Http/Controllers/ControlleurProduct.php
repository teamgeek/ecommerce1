<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:09
 */

namespace monEcommerce\Http\Controllers;


class ControlleurProduct extends Controller
{

    public function afficherProduit(){
        return view('pages/products');
    }

}