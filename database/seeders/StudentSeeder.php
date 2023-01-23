<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
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
        for($i=0; $i<50; $i++){
            $item = [
                'ime'=> $faker->firstName(),
                 'prezime'=>$faker->lastName(),
                 'broj_indeksa'=>rand(1,100),
                 'datum_rodjenja'=>$faker->date(),

            ];

            /* array_push($data, $item); isto  */
            $data[]= $item;
        }

        Student::insert($data);
    }
}
