<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $username = Auth::user()->name;
        $categories = Categorie::all();
        $name = $_GET['query'] ?? '';
        $produits = Produit::with('categorie')->where('name', 'LIKE', '%' . $name . '%')->orderBy('created_at', 'ASC')->paginate(4);
        return view('dashbod_admin', compact('produits', 'categories','username'));
    }


    public function create()
    {
        $categories = Categorie::all();

        return view('create', compact('categories'));
    }

    public function destroy($id)
    {
        Produit::destroy($id);
        // $produits = Produit::all();
        // return view('dashbod_admin', compact('produits'));
        return $this->index();
    }


    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|between:3,30',
            'prix' => 'required|integer',
            'description' => 'required|string',
            'categorie_id' => 'required|int',
            ]);
            
            Produit::create($request->all());
            
            // dd($request->all());
        return $this->index();
    }


    public function show()
    {
        // description (details)
        return view('dashbod_admin');
    }

    public function edit($id)
    {
        $produit = Produit::find($id);
        $categories = Categorie::all();

        return view('edit', compact('produit', 'categories'));
        // dump($produit);
    }

    public function update(Request $request, $id)
    {
        //   dd($request->all());


        $produit = Produit::findOrFail($id);

        $produit->update([
            'name' => $request->name,
            'prix' => $request->prix,
            'description' => $request->description,
            'categorie_id' => $request->categorie_id,
        ]);

        return $this->index();
    }


    public function filter($id)
    {
        $produits = Produit::with('categorie')->where('categorie_id', $id)->orderBy('created_at', 'ASC')->paginate(4);
        // return view('dashbod_admin', compact('produits'));
        $categories = Categorie::all();
        return view('dashbod_admin', compact('produits', 'categories'));
    }
}
// preparer un petch






