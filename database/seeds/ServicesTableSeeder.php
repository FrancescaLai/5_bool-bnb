<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Service;

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

        foreach($services as $service) {
            $newService = new Service();

            $newService->name = $service;
            $newService->slug = Str::slug($service, '-');

            $newService->save();
        }
    }
}
