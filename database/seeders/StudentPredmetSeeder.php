<?php

namespace Database\Seeders;

use App\Models\Predmet;
use App\Models\Student;
use App\Models\StudentPredmet;
use Illuminate\Database\Seeder;
use Faker\Factory;

class StudentPredmetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Factory::create();
       $studentsCount = Student::count();
       $predmetCount = Predmet::count();

       $data = [];
       for($i=0; $i<500; $i++){
        $item = [
            'student_id'=> rand(1, $studentsCount),
             'predmet_id'=>rand(1, $predmetCount),
             'ocjena'=>rand(5,10),
             'datum_polaganja'=>$faker->date(),


        ];
        $data[]= $item;
       }

       StudentPredmet::insert($data);
    }
}
