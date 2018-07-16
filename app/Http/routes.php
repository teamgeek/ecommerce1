<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//afficher l'index
Route::get('/',[
    'as'=>'index',
    'uses'=>'ControlleurIndex@afficherIndex'
]);

//afficher product
Route::get('/products',[
    'as'=>'produit',
    'uses'=>'ControlleurProduct@afficherProduit'
]);

Route::post('/products',[
    'as'=>'rechercheproduit',
    'uses'=>'ControlleurProduct@afficherProduit'
]);

//afficher compair
Route::get('/compair',[
    'as'=>'comparer',
    'uses'=>'ControlleurCompair@afficherComparer'
]);

//afficher register
Route::get('/register',[
    'as'=>'inscription',
    'uses'=>'ControlleurRegister@afficherEnregistrement'
]);

//aficher contact
Route::get('/contact',[
    'as'=>'contact',
    'uses'=>'ControlleurContact@afficherContact'
]);

//afficher offre special
Route::get('/offrespecial',[
    'as'=>'offre special',
    'uses'=>'ControlleurSpecialOffer@afficherSpecialOffre'
]);

//afficher delivery
Route::get('/normal',[
    'as'=>'normal',
    'uses'=>'ControlleurNormal@afficherDelivery'
]);

//afficher Panier
Route::get('/panier',[
    'as'=>'panier',
    'uses'=>'ControlleurProductSummary@afficherPanier'
]);

//afficher produit detail
Route::get('/produit detail',[
    'as'=>'produitdetail',
    'uses'=>'ControlleurProductDetail@afficherProduitDetail'
]);

//afficher faq
Route::get('/faq',[
    'as'=>'faq',
    'uses'=>'ControlleurFac@afficherFaq'
]);

//afficher login
Route::get('/login',[
    'as'=>'login',
    'uses'=>'ControlleurLogin@afficherLogin'
]);

//afficher notice legal
Route::get('/legal notice',[
    'as'=>'legal notice',
    'uses'=>'ControlleurLegalNotice@afficherLegalNotice'
]);

//afficher tac
Route::get('/tac',[
    'as'=>'tac',
    'uses'=>'ControlleurTac@afficherTac'
]);