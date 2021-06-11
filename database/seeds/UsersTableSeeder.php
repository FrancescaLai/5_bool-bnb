<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new User();

        $newUser->email = 'franco@gmail.com';
        $newUser->password = '123abc456';
        $newUser->name = 'Franco';
        $newUser->surname = 'Rossi';
        $newUser->birth_date = '1995-06-23';
        $newUser->phone_number = '3583456789';
        $newUser->document_type = 'id';
        $newUser->document_number = ' CA12345AA';

        $newUser->save();
    }
}
