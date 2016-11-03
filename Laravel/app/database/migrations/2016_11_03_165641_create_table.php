<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios',function($table){
			$table->increments('id');
			$table->string('login')->unique();
			$table->string('email')->unique();
			$table->timestamps();
			//$table->integer('')->unsigned();
			//$table->foreign('')->references()->on()->onDelete('cascade')->onUpdate('cascade');
		});

		Schema::create('pessoas',function($table){
			$table->increments('id');
			$table->string('nome');
			$table->string('idade');
			$table->integer('id_usuario')->unsigned();
			$table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
		Schema::drop('pessoas');
	}

}
