<?php

namespace App\Http\Controllers\Guest;

use App\Apartment;
use App\Http\Controllers\Controller;
use App\Message;
use App\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Apartment $apartments)
    {
        $services = Service::all();

        // restituisco la pagina search
        return view('guest.search', compact('services', 'apartments'));
    }
}
