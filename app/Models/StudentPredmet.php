<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPredmet extends Model
{
    use HasFactory;

    protected $guarded = [];  //sva polja su dozvoljena

    protected $table = "student_predmet";

    public function Student()
    {
         $this->hasOne(Student::class, 'id', 'student_id' );
    }

    public function Predmet()
    {
         $this->hasOne(Predmet::class, 'id', 'predmet_id' );
    }
}
