<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Uloga extends Model
{
    use HasFactory;

    protected $guarded = [];  //sva polja su dozvoljena

    protected $table = "uloga";

}