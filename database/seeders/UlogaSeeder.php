<?php

namespace Database\Seeders;

use App\Models\Uloga;
use Illuminate\Database\Seeder;

class UlogaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $faker = Factory::create();
        for($i = 0; $i <= 10; $i++ ){
            $korisnik = new Korisnik();
            $korisnik->ime= $faker->firstName;
            $korisnik->prezime= $faker->lastName;
            $korisnik->email= $faker->email;
            $korisnik->password=Hash::make('test');
            $korisnik->save(); */


        $uloga = ['adminstrator', 'moderator', 'korisnik'];

        foreach($uloga as $item){

            $newUloga = new Uloga();
            $newUloga-> naziv = $item;
            $newUloga->save();

        }


    }
}
