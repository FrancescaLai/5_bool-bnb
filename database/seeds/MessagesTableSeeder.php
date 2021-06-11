<?php

use Illuminate\Database\Seeder;
use App\Message;
use App\Apartment;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newMessage = new Message();

        $apartment = Apartment::where('visibility', 1)->get()->first();
        $newMessage->apartment_id = $apartment->id;
        $newMessage->subject = 'Lorem';
        $newMessage->message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $newMessage->date = '2021-06-10';


        $newMessage->save();
    }
}
