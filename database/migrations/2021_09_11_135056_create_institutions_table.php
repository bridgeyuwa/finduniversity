<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->string('id');
           $table->string('name');
           $table->string('abbr');
           $table->integer('established');
           
             $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('schooltype_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('term_id');
            $table->string('address');
            
            
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
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
