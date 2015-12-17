<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioProjectImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_project_image', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('portfolio_project_id')
                ->references('id')
                ->on('portfolio_project')
                ->onDelete('cascade');
            $table->string('filename');
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
        Schema::drop('portfolio_project_image');
    }
}
