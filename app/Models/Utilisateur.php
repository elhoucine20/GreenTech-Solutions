<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{


protected $fillable = [
    'name',
    'email',
    'role',
    'password'
];
    //
    public function favorite(){
        return $this->hasMany(Favorite::class);
    }


        protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
