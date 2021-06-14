<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Message;
use App\Apartment;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{

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

        $newMessage->save();

        
         return view('guest.show');

    }

    public function deleteMessage(Message $message)
    {
        // Controllo se l'utente è autorizzato alla modifica
        $user_id = Auth::id();

        if ($message->user_id != $user_id) {
            abort('403');
        }

        $message->delete();

        return redirect()->route('guest.show')->with('message', 'Il messaggio è stato eliminato');
    }
}
