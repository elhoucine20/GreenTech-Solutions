<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permissions extends Model
{
    //


    public function role():BelongsToMany{
        return $this->belongsToMany(Role::class);
    }
}
