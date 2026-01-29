<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;


class ProduitController extends Controller
{
    //
    public function index() {
        $produits = Produit::all();
        // $produits = Produit::paginate(4);
        return view('dashbod_admin', compact('produits'));
        // require_once 'resources/views/dashbod_admin.blade.php';
        }
        public function create() {
            
            }
            public function destroy($id) {
                 Produit::destroy($id);
                //  $delete->destroy();
                $produits = Produit::all();
        return view('dashbod_admin', compact('produits'));
    }
    public function store() {}
    public function show() {
        // description (details)
    }
    public function update() {}
    public function edit() {}
}
