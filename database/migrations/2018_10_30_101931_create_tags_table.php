<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('binary_search');
            $table->integer('dynamic_programming');
            $table->integer('ad_hoc');
            $table->integer('basic_data_structure');
            $table->integer('bfs');
            $table->integer('dfs');
            $table->integer('math');
            $table->integer('string');
            $table->integer('greedy');
            $table->integer('bit_manipulation');
            $table->integer('divide_and_conquer');
            $table->integer('sort');
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
        Schema::dropIfExists('tags');
    }
}
