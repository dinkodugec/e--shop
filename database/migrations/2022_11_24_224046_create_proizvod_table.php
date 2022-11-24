<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProizvodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proizvod', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategorija')->index()->default(-1);
            $table->string('naziv')->default('');
            $table->text('opis');
            $table->decimal('cijena', 14)->default(0);
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
        Schema::dropIfExists('proizvod');
    }
}
