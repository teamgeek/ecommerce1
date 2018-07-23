<?php
/**
 * Created by PhpStorm.
 * User: beta_
 * Date: 21/07/2018
 * Time: 16:42
 */

namespace monEcommerce\Http\Controllers;


class ControlleurArticle extends Controller
{

    public function afficherArticle(){
        return view("pagesAdministration/article");
    }

}