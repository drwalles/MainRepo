<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('problem_name');
            $table->string('proble_description');
            $table->string('problem_setter');
            $table->integer('total_solved');
            $table->integer('total_submission');
            $table->integer('problem_tag')->unsigned();
            $table->foreign('proglem_tag')->references('id')->on('tags')->onDelete('cascade');
            $table->integer('time_limit');
            $table->integer('memory_limit');
            $table->string('sample_input');
            $table->string('sample_output');
            $table->string('tc_input');
            $table->string('tc_output');
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
        Schema::dropIfExists('problems');
    }
}
