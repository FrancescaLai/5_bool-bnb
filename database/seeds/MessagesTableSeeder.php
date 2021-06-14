<?php

use Illuminate\Database\Seeder;
use App\Message;
use App\Apartment;
use App\User;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message_1 = new Message();

        $apartment = Apartment::where('visibility', 1)->inRandomOrder()->first();
        $rand = rand(0, 1);

        if ($rand) {
            $user = User::inRandomOrder()->first();
            $message_1->user_id = $user->id;
        }

        $message_1->apartment_id = $apartment->id;
        $message_1->subject = 'Parcheggio';
        $message_1->message = 'Potrebbe gentilmente indicarmi i parcheggi situati nelle vicinanze?';
        $message_1->date = '2021-06-10';

        $message_1->save();
    }
}
