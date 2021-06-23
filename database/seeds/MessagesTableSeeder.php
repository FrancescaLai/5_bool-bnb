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
        // $message_1_1 = new Message();
        // $apartment = Apartment::where('visibility', 1)->inRandomOrder()->first();
        // $rand = rand(0, 1);
        // if ($rand) {
        //     $user = User::inRandomOrder()->first();
        //     $message_1_1->user_id = $user->id;
        // }


        // $user1 = User::where('id', 1);
        // $user2 = User::where('id', 2);
        // $user3 = User::where('id', 3);
        // $message_1->apartment_id = $apartment->id;

        /**
         * messages-user1-apartments
         */
        $message_1_1 = new Message();
        $message_1_1->user_id = null;
        $message_1_1->apartment_id = 1;
        $message_1_1->subject = 'Parcheggio';
        $message_1_1->message = 'Potrebbe gentilmente indicarmi i parcheggi situati nelle vicinanze?';
        $message_1_1->date = '2021-06-10';
        $message_1_1->save();

        $message_1_3 = new Message();
        $message_1_3->user_id = null;
        $message_1_3->apartment_id = 3;
        $message_1_3->subject = 'Disabili';
        $message_1_3->message = 'Gentilmente, mi saprebbe dire se l\'ascensore è adatto per persone disabili, grazie.';
        $message_1_3->date = '2021-06-10';
        $message_1_3->save();

        $message_1_7 = new Message();
        $message_1_7->user_id = null;
        $message_1_7->apartment_id = 7;
        $message_1_7->subject = 'Animali';
        $message_1_7->message = 'Dato che non è indicato, mi chiedevo se era possibile portare animali domestici.';
        $message_1_7->date = '2021-06-10';
        $message_1_7->save();

        /**
         * messages-user2-apartments
         */
        $message_2_11 = new Message();
        $message_2_11->user_id = null;
        $message_2_11->apartment_id = 11;
        $message_2_11->subject = 'Pulman';
        $message_2_11->message = 'Gentilmente mi potrebbe indicare quanto dista la stazione dei pulman.';
        $message_2_11->date = '2021-06-10';
        $message_2_11->save();

        $message_2_13 = new Message();
        $message_2_13->user_id = null;
        $message_2_13->apartment_id = 13;
        $message_2_13->subject = 'Check';
        $message_2_13->message = 'Mi potrebbe dare ulteriori informazioni sul check automatico.';
        $message_2_13->date = '2021-06-10';
        $message_2_13->save();

        /**
         * messages-user3-apartments
         */
        $message_3_21 = new Message();
        $message_3_21->user_id = null;
        $message_3_21->apartment_id = 21;
        $message_3_21->subject = 'Check';
        $message_3_21->message = 'Vorrei ulteriori informazioni sul check, grazie.';
        $message_3_21->date = '2021-06-10';
        $message_3_21->save();
    }
}
