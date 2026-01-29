<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function index() {
        $categories = Categorie::all();
        // return view('dashbod_admin',compact('categories'));
    }
    public function create() {
        
    }
    public function destroy() {}
    public function store() {}
    public function show() {}
    public function update() {}
    public function edit() {}
}
