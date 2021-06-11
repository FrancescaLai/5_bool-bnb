<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\User;
use Illuminate\Support\Str;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newApartment = new Apartment();

        $user = User::get()->first();

        $newApartment->user_id = $user->id;
        $newApartment->name = 'Villa Madrigali';
        $newApartment->slug = Str::slug($newApartment->name, '-');
        // $newApartment->visibility = rand(0, 1);
        $newApartment->image = 'https://placeholder.com/300';
        $newApartment->description = 'Questo carinissimo alloggio si trova nel cuore del centro di Napoli, a due passi dal Museo Archeologico Nazionale e dalla più antica porta della città, la Porta di San Gennaro.
        E\' composto da un comodo letto matrimoniale e un bagno con doccia.
        E\' in una posizione perfetta per esplorare la città a piedi (ma è anche molto vicino ai principali mezzi di trasporto pubblico).';
        $newApartment->num_room = 5;
        $newApartment->num_bath = 2;
        $newApartment->num_bed = 4;
        $newApartment->mq = 200;
        $newApartment->price_day = 400;
        $newApartment->country = 'Italia';
        $newApartment->region = 'Liguria';
        $newApartment->city = 'Levanto';
        $newApartment->street = 'Via Madrigali, 10';
        $newApartment->zip_code = '19015';
        $newApartment->floor = 1;
        $newApartment->latitude = 44.1740563;
        $newApartment->longitude = 9.6269640648;

        $newApartment->save();

    }
}
