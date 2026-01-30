<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    /** @use HasFactory<\Database\Factories\ProduitFactory> */
    use HasFactory;

protected $fillable = [
    'name',
    'prix',
    'description',
    'categorie_id'
];
    //    protected $guarded=["id"];

       // Un produit appartient à une catégorie
       public function categorie():BelongsTo
       {
           return $this->belongsTo(Categorie::class);
       }
}





