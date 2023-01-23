<?php

namespace Database\Seeders;

use App\Models\Predmet;
use App\Models\Student;
use App\Models\StudentPredmet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([StudentSeeder::class, PredmetSeeder::class, StudentPredmetSeeder::class]);
    }
}
