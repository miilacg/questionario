<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration {
	public function up() {
		Schema::create('login', function(Blueprint $table) {
			$table->increments('id');

			$table->double('cpf', 11);
			$table->char('tipo', 100);
			$table->string('nome', 60)->nullable(); //string funciona como varchar	

			$table->timestamps();
      		$table->softDeletes();
		});
	}

	public function down() {
		Schema::drop('login');
	}
}
