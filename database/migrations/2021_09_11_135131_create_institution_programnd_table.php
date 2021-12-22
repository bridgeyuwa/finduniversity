<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionProgramndTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('institution_programnd', function (Blueprint $table) {

            $table->unsignedBigInteger('institution_id');
            $table->unsignedBigInteger('programnd_id');

            $table->text('description');
            $table->string('duration');
            $table->integer('fee_high');
            $table->integer('fee_low');
            


            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('programnd_id')->references('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('program_institution');
    }

}
