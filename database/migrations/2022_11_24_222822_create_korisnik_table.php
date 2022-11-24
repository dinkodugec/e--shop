<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorisnikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisnik', function (Blueprint $table) {
            $table->id();
            $table->integer('id_uloga')->index()->default(-1);   //constarined and null usporava rad baze
            $table->string('ime')->default('');
            $table->string('prezime')->default('');
            $table->string('email')->default('');
            $table->string('password')->default('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('korisnik');
    }
}