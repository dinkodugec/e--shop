<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPredemtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_predmet', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->index()->default(-1);
            $table->integer('predmet_id')->index()->default(-1);
            $table->integer('ocjena')->default(5);
            $table->date('datum_polaganja')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_predemt');
    }
}