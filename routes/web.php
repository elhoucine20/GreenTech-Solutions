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
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategorieController;
use App\Http\Middleware\userMiddleware;

Route::get('/hi', function(){
 return View('today');
 });
 

// Route::get('/dashbord', [CategorieController::class, 'index']);
Route::controller(ProduitController::class)->middleware(userMiddleware::class)->group(function(){

    Route::get('/dashbord', 'index')->name('index');
    
    Route::get('/delete/{id}', 'destroy');
    
    Route::get('/create',  'create')->name('produits.create');
    
    Route::post('/dashbord', 'store')->name('store');
    
    Route::get('/edit/{id}', 'edit')->name('edit');
    
    Route::put('/update/{id}', 'update')->name('update');
    
    Route::get('/filter/{id}', 'filter')->name('filter');

});

// phase 2

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/inscription', [LoginController::class, 'inscrire'])->name('inscrire');

Route::post('/toLogin', [LoginController::class, 'toLogin'])->name('toLogin');

Route::get('/showlogin', [LoginController::class, 'index']);




