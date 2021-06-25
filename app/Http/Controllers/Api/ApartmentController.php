<?php

namespace App\Http\Controllers\Api;

use App\Apartment;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function getAll()
    {
        $apartment = Apartment::all();
        // $services = Service::all();

        // foreach ($apartments as $apartment) {

        //     for ($i = 0; $i < rand(0, 22); $i++) {
        //         $randServices = rand(0, 22);
        //         $service['services'] = $services[$randServices];
        //         $apartment->services()->attach($service['services']);
        //     }
        // }

        return response()->json($apartment);
    }

    public function show(Apartment $apartment)
    {

        return response()->json($apartment);
    }

    public function getServices()
    {
        $services = Service::all();

        return response()->json($services);
    }
}
