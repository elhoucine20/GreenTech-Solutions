<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class permissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $evite = ['inscrire','login'];
        $routes = Route::getRoutes();
        foreach($routes as $route){
         $routeName = $route->getName();
         if (in_array($routeName,$evite) || !$routeName) {
            # code...
            continue;
         }
         DB::table('permissions')->insert([
            'route_name'=>$routeName,
         ]);

        }
    }
}
