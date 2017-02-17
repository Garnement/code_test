<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function(Blueprint $table){

            $table->increments('id');//PK
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('title', 100);//Titre de la question
            $table->string('abstract', 100);//Résumé de la question
            $table->string('content');//Contenu de la question
            $table->enum('status', ['published', 'unpublished'])->default('unpublished'); //Publication
            $table->timestamp('date');//Date de publication
            $table->timestamps();

            #Foreign Key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('questions');
    }
}
