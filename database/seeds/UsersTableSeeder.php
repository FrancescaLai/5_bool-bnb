<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_1 = new User();
        $user_1->email = 'samuele.madrigali@gmail.com';
        $user_1->password = Hash::make('12345678');
        $user_1->name = 'Samuele';
        $user_1->surname = 'Madrigali';
        $user_1->birth_date = '1990-06-23';
        $user_1->phone_number = '3583456789';
        $user_1->document_type = 'Id';
        $user_1->document_number = ' MR47929AA';
        $user_1->save();

        $user_2 = new User();
        $user_2->email = 'amedeo.pisani@gmail.com';
        $user_2->password = Hash::make('87654321');
        $user_2->name = 'Amedeo';
        $user_2->surname = 'Pisani';
        $user_2->birth_date = '1971-12-11';
        $user_2->phone_number = '3436459782';
        $user_2->document_type = 'Passport';
        $user_2->document_number = 'BC7844234';
        $user_2->save();


        $user_3 = new User();
        $user_3->email = 'viola.marino@gmail.com';
        $user_3->password = Hash::make('87654321');
        $user_3->name = 'Viola';
        $user_3->surname = 'Marino';
        $user_3->birth_date = '1994-04-22';
        $user_3->phone_number = '3486552723';
        $user_3->document_type = 'Ld';
        $user_3->document_number = 'B64D2LJ9P';
        $user_3->save();
    }
}
