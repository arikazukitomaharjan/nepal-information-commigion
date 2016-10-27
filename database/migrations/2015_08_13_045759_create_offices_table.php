<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('development_region')->nullable();
			$table->string('district')->nullable();
			$table->string('central')->nullable();
			$table->string('email')->nullable();
			$table->string('address')->nullable();
			$table->string('phone1',25)->nullable();
			$table->string('phone2',25)->nullable();
			$table->string('Type')->nullable();
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
		Schema::drop('offices');
	}

}
