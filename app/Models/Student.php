<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];  //sva polja su dozvoljena

    protected $table = "student";

    public function predmeti()
    {
        $this->belongsToMany(Predmet::class, "student_predmet");
    }
}