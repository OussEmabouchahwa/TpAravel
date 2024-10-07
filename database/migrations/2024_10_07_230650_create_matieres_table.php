<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieresTable extends Migration
{
    public function up()
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->id('codemat'); // Clé primaire
            $table->string('libelle');
            $table->integer('coef');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matieres');
    }
}
