<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\View\View;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $produits = Produit::all();
        // $produits = Produit::paginate(4);
        return view('dashbod_admin', compact('produits'));
        // require_once 'resources/views/dashbod_admin.blade.php';
    }


    public function create()
    {
        return view('create');
    }
    public function destroy($id)
    {
        Produit::destroy($id);
        $produits = Produit::all();
        return view('dashbod_admin', compact('produits'));
    }


    public function store(Request $request)
    {

        // dd($request->all());

        Produit::create([
            'name' => $request->name,
            'prix' => $request->prix,
            'description' => $request->description,
            'categorie_id' => $request->categorie_id,
        ]);

        $produits = Produit::all();
        return view('dashbod_admin', compact('produits'));
    }



    public function show()
    {
        // description (details)

    }
    public function update() {}
    public function edit() {}
}
