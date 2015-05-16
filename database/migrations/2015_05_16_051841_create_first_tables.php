<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('username');
			$table->string('email');
			$table->string('password');
			$table->timestamps();
		});

		Schema::create('bands',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('genre');
			$table->timestamps();
		});

		Schema::create('studios',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('phone');
			$table->string('email');
			$table->timestamps();
		});

		Schema::create('user_bands',function($table){
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('band_id');
		});

		Schema::create('user_studios',function($table){
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('studio_id');
			$table->string('role');
		});

		Schema::create('bookings',function($table){
			$table->increments('id');
			$table->integer('band_id');
			$table->integer('studio_id');
			$table->date('date');
			$table->time('start_hour');
			$table->time('end_hour');
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
		//
	}

}
