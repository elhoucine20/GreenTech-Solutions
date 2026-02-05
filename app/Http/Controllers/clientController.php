<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class clientController extends Controller
{
    //
    public function index(){
        // dd("ggggg");

        $categories = Categorie::all();
        $name = $_GET['query'] ?? '';
        $produits = Produit::with('categorie')->where('name', 'LIKE', '%' . $name . '%')->orderBy('created_at', 'ASC')->paginate(4);
        return view('dashbord_client', compact('produits', 'categories'));

    }


        public function filtrage($id)
    {
        $produits = Produit::with('categorie')->where('categorie_id', $id)->orderBy('created_at', 'ASC')->paginate(4);
        // return view('dashbod_admin', compact('produits'));
        $categories = Categorie::all();
        return view('dashbord_client', compact('produits', 'categories'));
    }
}
