<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Service;
use App\Apartment;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Wi-fi',
            'Cucina',
            'Riscaldamento',
            'Aria condizionata',
            'Lavatrice',
            'Asciugatrice',
            'Posto auto',
            'Colazione',
            'Camino',
            'Ferro da stiro',
            'Phon',
            'Spazio di lavoro dedicato',
            'TV',
            'Cassaforte',
            'Culla',
            'Seggiolone',
            'Self check-in',
            'Allarme antincendio',
            'Rivelatore di monossido di carbonio',
            'Bagno privato',
            'Lungo la spiaggia',
            'Accesso diretto alle piste da sci'
        ];

        foreach ($services as $service) {
            $newService = new Service();

            $newService->name = $service;
            $newService->slug = Str::slug($service, '-');

            $newService->save();
        }

        /**
         * apartments-services
         */

        // $apartment1 = Apartment::where('id', 1);
        // $apartment2 = Apartment::where('id', 2);
        // $apartment3 = Apartment::where('id', 3);
        // $apartment4 = Apartment::where('id', 4);
        // $apartment5 = Apartment::where('id', 5);
        // $apartment6 = Apartment::where('id', 6);
        // $apartment7 = Apartment::where('id', 7);
        // $apartment8 = Apartment::where('id', 8);
        // $apartment9 = Apartment::where('id', 9);
        // $apartment10 = Apartment::where('id', 10);
        // $apartment11 = Apartment::where('id', 11);
        // $apartment12 = Apartment::where('id', 12);
        // $apartment13 = Apartment::where('id', 13);
        // $apartment14 = Apartment::where('id', 14);
        // $apartment15 = Apartment::where('id', 15);
        // $apartment16 = Apartment::where('id', 16);
        // $apartment17 = Apartment::where('id', 17);
        // $apartment18 = Apartment::where('id', 18);
        // $apartment19 = Apartment::where('id', 19);
        // $apartment20 = Apartment::where('id', 20);
        // $apartment21 = Apartment::where('id', 21);

    }
}
