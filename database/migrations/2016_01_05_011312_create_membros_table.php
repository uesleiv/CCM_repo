<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome');
			$table->string('sexo');
			$table->string('email');
			$table->string('dtNascimento');
			$table->string('enderecoPessoal');
			$table->string('cidadeEndPessoal');
			$table->string('ufEndPessoal');
			$table->string('cepEndPessoal');
			$table->string('nrEndPessoal');
			$table->string('complEndPessoal');
			$table->string('fonePessoal');
			$table->string('celPessoal');
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
		Schema::drop('membros');
	}

}
