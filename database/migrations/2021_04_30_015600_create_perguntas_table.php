<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerguntasTable extends Migration {
  public function up() {
    Schema::create('pergunta', function (Blueprint $table) {
      $table->increments('id');
      $table->text('questao');

      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down() {
    Schema::dropIfExists('pergunta');
  }
}