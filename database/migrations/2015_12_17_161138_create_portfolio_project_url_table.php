<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioProjectUrlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_project_url', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('portfolio_project_id')->unsigned();
            $table->foreign('portfolio_project_id')
                ->references('id')
                ->on('portfolio_project')
                ->onDelete('cascade');
            $table->string('label');
            $table->string('url');
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
        Schema::drop('portfolio_project_url');
    }
}
