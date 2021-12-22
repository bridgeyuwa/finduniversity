<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionProgramTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('institution_program', function (Blueprint $table) {

            $table->string('institution_id');
            $table->string('program_id');

            $table->text('description')->nullable();
            $table->string('duration')->nullable();
            $table->integer('fee_high')->nullable();
            $table->integer('fee_low')->nullable();
            

       $table->primary(['institution_id', 'program_id']);
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('program_id')->references('id')->on('programs');
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
