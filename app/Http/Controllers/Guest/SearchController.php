<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        // $tags = Tag::all();
        // restituisco la pagina search
        return view('guest.search');
    }
}
