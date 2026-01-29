<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    /** @use HasFactory<\Database\Factories\ProduitFactory> */
    use HasFactory;

        protected $fillable = [
        'name',
        'prix',
        'description',
       ];
       protected $guarded=["id"];

       // Un produit appartient à une catégorie
       public function category()
       {
           return $this->belongsTo(Categorie::class);
       }
}





