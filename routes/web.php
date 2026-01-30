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
use App\Http\Controllers\CategorieController;


Route::get('/hi', function(){
 return View('today');
 });
 
// Route::get('/dashbord', function(){
//  return View('dashbod_admin');
// });


Route::get('/dashbordd', function(){
 return View('admin_dashbord');
});
// Route::get('/create', function(){
//  return View('create');
// });
// Route::get('/edit', function(){
//  return View('update');
// });
// Route::get('/delete', function(){
//  return View('');
// });
// Route::get('/show', function(){
//  return View('showProduct');
// });
// Route::get('/login', function(){
//  return View('login');
// });
// Route::get('/home', function(){
//  return View('home');
// });


// Route::get('/dashbord', [CategorieController::class, 'index']);

Route::get('/dashbord', [ProduitController::class, 'index'])->name('index');

Route::get('/delete/{id}', [ProduitController::class, 'destroy']);

Route::get('/create', [ProduitController::class, 'create'])->name('produits.create');

Route::post('/produits', [ProduitController::class, 'store'])->name('store');

Route::get('/edit/{id}', [ProduitController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [ProduitController::class, 'update'])->name('update');


