<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\User;
use App\Apartment;
use App\Message;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->get();
        $apartments = Apartment::where('user_id', $user_id)->get();
        $messages = Message::where('user_id', $user_id)->get();

        return view('admin.dashboard', compact('user', 'apartments', 'messages'));

    }


}
