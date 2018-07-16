<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 14/07/2018
 * Time: 06:09
 */

namespace monEcommerce\Http\Controllers;


class ControlleurProductSummary extends Controller
{

    public function afficherPanier(){
        return view('pages/product_summary');
    }

}