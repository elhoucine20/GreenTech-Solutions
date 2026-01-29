<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Produit;

use Psy\Util\Str;


class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */
    public function run(): void
    {
        //
        Produit::factory(10)->create();

        // Produit::factory()->create([
        //     'name'=>' fleurs',
        //     'prix'=>100,
        //     'description'=>'Les plantes terrestres à fleurs permettent'
        //             ]);
    }
}
