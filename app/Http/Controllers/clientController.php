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

         $favorites = Favorite::where('utilisateur_id', Auth::user()->id)
                              ->get();

        //  $favorites = Auth::user()->favorite;
        return view('dashbord_client', compact('produits', 'categories','favorites'));

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
        
         $produits = Favorite::where('utilisateur_id', Auth::user()->id)->get();
               return view('favorites', compact('produits'));
     }

    public function destroy(Favorite $favorite)
    {
      Favorite::where('produit_id',$favorite->produit->id)->delete($favorite->id);
      return to_route('client_dashbord');
    }

}


// top 3
// SELECT produits.id , produits.name , COUNT(favorite.id) as totalFa
// FROM produits 
// left join favorite on produits.id=favorite.produit_id
// group by produits.id 
// order by totalFa desc
// limit 3