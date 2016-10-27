<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoOfficersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('info_officers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('email')->nullable();
			$table->string('post')->nullable();
			$table->string('fax')->nullable();
			$table->string('phone',25)->nullable();
			$table->integer('office_id')->unsigned()->index();
			$table->foreign('office_id')->references('id')->on('offices');
			$table->string('category')->nullable();
			
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
		Schema::drop('info_officers');
	}

}
