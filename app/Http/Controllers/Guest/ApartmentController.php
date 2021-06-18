<?php

namespace App\Http\Controllers\Guest;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Apartment;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showApartment(Apartment $apartment){

        return view('guest.show', compact('apartment'));
    }

    public function addMessage(Request $request, Apartment $apartment, User $user)
    {

        $request->validate([
            'subject' => 'nullable|string|max:100',
            'message' => 'required|string',
        ]);

        $newMessage = new Message();

        $user_id = Auth::id();

        if($user->id = $user_id){
            $newMessage->user_id = $user->id;
        }
        
        $newMessage->apartment_id = $apartment->id;
        $newMessage->subject = $request->subject;
        $newMessage->message = $request->message;
        $now = new Carbon();
        $newMessage->date = $now;

        $newMessage->save();

        
         return view('guest.show', compact('apartment', 'user'))->with('message', 'Il messaggio è stato inviato');

    }

    // public function deleteMessage(Message $message)
    // {
    //     // Controllo se l'utente è autorizzato alla modifica
    //     $user_id = Auth::id();

    //     if ($message->user_id != $user_id) {
    //         abort('403');
    //     }

    //     $message->delete();

    //     return redirect()->route('guest.show')->with('message', 'Il messaggio è stato eliminato');
    // }
}
