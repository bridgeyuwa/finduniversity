<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            
            $table->unsignedBigInteger('college_id');
            $table->unsignedBigInteger('honor_id');
            $table->text('description')->nullable();
            $table->text('direct_entry_req')->nullable();
            $table->text('utme_req')->nullable();
            $table->text('utme_subjects')->nullable();
            
            $table->primary('id');
            $table->foreign('college_id')->references('id')->on('colleges');
            $table->foreign('honor_id')->references('id')->on('honors');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
