<?php

namespace Database\Seeders;

use App\Models\Predmet;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PredmetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $data = [];
        for($i=0; $i<15; $i++){
            $item = [
                'naziv'=> $faker->colorName(),
                 'razred'=>rand(1,4),


            ];

            /* array_push($data, $item); isto  */
            $data[]= $item;
        }

        Predmet::insert($data);
    }
}
