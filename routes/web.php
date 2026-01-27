<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});
/* 
GET: lecture
POST:  ajouter
PUT: Modification complete
PATCH:  Modification partielle
DELETE: supprimer 
CENNECT: 
OPTIONS: 
*/
Route::get('/hi', function(){
 return View('today');
});