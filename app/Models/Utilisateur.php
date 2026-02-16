<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
protected $table = 'utilisateurs';

protected $fillable = [
    'name',
    'email',
    'role',
    'password',
    'role_id'
];
    //




        protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



        public function favorite():BelongsToMany{
        // return $this->belongsToMany(Favorite::class);
        return $this->BelongsToMany(Produit::class, 'favorite','utilisateur_id', 'produit_id');
        }
        
        public function role():BelongsTo{
        return $this->belongsTo(Role::class);
        }

}
