<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('technology_id')->unsigned();
            $table->foreign('technology_id')
                ->references('id')
                ->on('technology')
                ->onDelete('cascade');
            $table->text('description');
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
        Schema::drop('competence');
    }
}
