<?php

namespace Database\Seeders;

use App\Models\Korisnik;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class KorisnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i = 0; $i <= 10; $i++ ){
            $korisnik = new Korisnik();
            $korisnik->ime= $faker->firstName;
            $korisnik->prezime= $faker->lastName;
            $korisnik->email= $faker->email;
            $korisnik->password=Hash::make('test');
            $korisnik->save();
        }
    }
}
