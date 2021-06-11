<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [

            'bronze' => [
                'price' => 2.99,
                'duration' => 1,
            ],
            'silver' => [
                'price' => 5.99,
                'duration' => 3,
            ],
            'gold' => [
                'price' => 9.99,
                'duration' => 6,
            ]
        ];



        foreach ($packages as $key => $package ) {
            
            $newPackage = new Package();

            $newPackage->name = $key;
            $newPackage->slug = Str::slug($key, '-');
            $newPackage->price = $package['price'];
            $newPackage->duration = $package['duration'];

            $newPackage->save();

        }
    }
}
