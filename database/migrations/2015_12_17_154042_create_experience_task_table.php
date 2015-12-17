<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_task', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('experience_id')
                ->references('id')
                ->on('experience')
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
        Schema::drop('experience_task');
    }
}
