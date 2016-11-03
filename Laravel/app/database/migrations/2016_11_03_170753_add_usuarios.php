<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$id1 = DB::table('usuarios')->insertGetId(array(
			'login'=>'marques',
			'email'=>'marques@gmail.com',
			'created_at'=>('2016-02-12 14:00:50'),
			'updated_at'=>('2016-03-12 15:00:00')
		));

		$id2 = DB::table('usuarios')->insertGetId(array(
			'login'=>'gabriel.marques',
			'email'=>'gabriel.marques@gmail.com',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		$id3 = DB::table('usuarios')->insertGetId(array(
			'login'=>'gabriel',
			'email'=>'gabriel@go2web.com',
			'created_at'=>('2016-04-21 16:00:00'),
			'updated_at'=>('2016-04-22 18:00:00')
		));

		$id4 = DB::table('usuarios')->insertGetId(array(
			'login'=>'carvalho',
			'email'=>'carvalho@gmail.com',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		$id5 = DB::table('usuarios')->insertGetId(array(
			'login'=>'gabriel.marques.carvalho',
			'email'=>'gabriel.marques.carvalho@gmail.com',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('pessoas')->insert(array(
			'nome'=>'Gabriel Marques de Carvalho',
			'idade'=>'21',
			'id_usuario'=>$id1
		));
		DB::table('pessoas')->insert(array(
			'nome'=>'Marques de Carvalho',
			'idade'=>'22',
			'id_usuario'=>$id2
		));
		DB::table('pessoas')->insert(array(
			'nome'=>'Gabriel de Carvalho',
			'idade'=>'31',
			'id_usuario'=>$id3
		));
		DB::table('pessoas')->insert(array(
			'nome'=>'Carvalho',
			'idade'=>'19',
			'id_usuario'=>$id4
		));
		DB::table('pessoas')->insert(array(
			'nome'=>'Gabques de Carvalho',
			'idade'=>'27',
			'id_usuario'=>$id5
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('usuarios')->delete(1);
		DB::table('pessoas')->delete(1);
	}

}
