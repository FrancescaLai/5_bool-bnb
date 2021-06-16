<?php

namespace App\Http\Controllers\Api;

use App\Apartment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function getAll(){

        $apartment = Apartment::all();

        return response()->json($apartment);

    }

    public function show(Apartment $apartment){

        return response()->json($apartment);
        
    }
}
