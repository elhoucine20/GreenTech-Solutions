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
        $produits = Produit::orderBy('created_at', 'ASC')->get();
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

    public function edit($id) {
       $produit = Produit::find($id);
        return view('edit',compact('produit'));
        // dump($produit);
    }

    public function update(Request $request,$id) {
        //   dd($request->all());
      
      
          $produit = Produit::findOrFail($id);
      
          $produit->update([
              'name' => $request->name,
              'prix' => $request->prix,
              'description' => $request->description,
              'categorie_id' => $request->categorie_id,
          ]);
      
             $produits = Produit::orderBy('created_at', 'ASC')->get();
        return view('dashbod_admin', compact('produits'));
    }
    
}
