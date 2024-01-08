<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class superHeroController extends Controller
{
    public function getSuperHero()
    {
    $SuperHero = DB::table('superheroes')->get();

    if ($SuperHero->isEmpty()) {
        return response()->json(['message' => 'No SuperHero found'], 404);

    } else {
        return response()->json($SuperHero, 200);
    }

    }
    //ici les autres fonctions du controller types create / delete / update
    public function createSuperHero(Request $request)
    {
        $SuperHero = DB::table('superheroes')->insert([
            'name' => $request->name,
            'city' => $request->city,
            'gadget' => $request->gadget,
            'vehicle' => $request->vehicle,
        ]);
        return response()->json($SuperHero, 201);
    }//a mettre en get pour tester
}
