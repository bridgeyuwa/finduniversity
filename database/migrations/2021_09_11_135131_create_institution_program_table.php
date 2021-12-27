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
            $table->integer('fees')->nullable();
            $table->text('direct_entry_req')->nullable();
            $table->text('utme_req')->nullable();
            $table->text('utme_subjects')->nullable();



           
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('institution_id')->references('id')->on('institutions');
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
