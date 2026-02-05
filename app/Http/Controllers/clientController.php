<?php

namespace App\Http\Controllers;
use App\Models\Utilisateur;
use App\Models\Categorie;
use App\Models\Favorite;
use App\Models\Produit;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function CreateFavorite(Produit $produit){

      /**
       * @var App\Models\Utilisateur $utilisateur
       */
        $utilisateur = Auth::user();
        $utilisateur->favorite()->toggle($produit->id);

        return to_route('client_dashbord');
    }

     public function lesFavorites(){
         $produits = Favorite::where('utilisateur_id', auth()->user()->id)
                              ->with('produit') 
                              ->get();
               return view('favorites', compact('produits'));
     }
}
