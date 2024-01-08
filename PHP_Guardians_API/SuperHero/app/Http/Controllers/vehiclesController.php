<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class superHeroController extends Controller
{
    public function getVehicles()
    {
    $SuperHero = DB::table('vehicles')->get();

    if ($SuperHero->isEmpty()) {
        return response()->json(['message' => 'No Vehicles found'], 404);

    } else {
        return response()->json($SuperHero, 200);
    }

    }
}
