<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\View\View;

class ProduitController extends Controller
{
    //
    public function index()
    {
        $categories = Categorie::all();

      $name = $_GET['query']??'';
        $produits = Produit::with('categorie')->where('name','LIKE','%'.$name.'%')->orderBy('created_at', 'ASC')->paginate(4);
        return view('dashbod_admin', compact('produits','categories'));
    }


    public function create()
    {
        $categories = Categorie::all();

        return view('create',compact('categories'));
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
        // dd($request->all());
        Produit::create([
            'name' => $request->name,
            'prix' => $request->prix,
            'description' => $request->description,
            'categorie_id' => $request->categorie_id,
        ]);

         return $this->index();

    }



    public function show()
    {
        // description (details)

    }

    public function edit($id) {
       $produit = Produit::find($id);
        $categories = Categorie::all();

        return view('edit',compact('produit','categories'));
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
      
           return $this->index();
    }


    public function filter($id){
      
             $produits = Produit::with('categorie')->where('categorie_id',$id)->orderBy('created_at', 'ASC')->paginate(4);
        // return view('dashbod_admin', compact('produits'));
        $categories = Categorie::all();
        return view('dashbod_admin',compact('produits','categories'));
        
    }  

}