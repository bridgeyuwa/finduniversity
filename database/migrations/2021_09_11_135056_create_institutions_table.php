<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('institutions', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('abbr')->nullable();
            $table->integer('established')->nullable();
            $table->integer('fees_low');
            $table->integer('fees_high');
            $table->text('catchment')->nullable();
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('schooltype_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('term_id');
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->integer('rank')->nullable();

            $table->primary('id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('schooltype_id')->references('id')->on('schooltypes');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('term_id')->references('id')->on('terms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('institutions');
    }

}
