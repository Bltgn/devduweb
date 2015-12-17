<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technology', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('technology_type_id')->unsigned();
            $table->foreign('technology_type_id')
                ->references('id')
                ->on('technology_type')
                ->onDelete('cascade');
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
        Schema::drop('technology');
    }
}
