<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpreuvesTable extends Migration
{
    public function up()
    {
        Schema::create('epreuves', function (Blueprint $table) {
            $table->id('numepreuve'); // Clé primaire
            $table->date('datepreuve');
            $table->string('lieu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('epreuves');
    }
}
