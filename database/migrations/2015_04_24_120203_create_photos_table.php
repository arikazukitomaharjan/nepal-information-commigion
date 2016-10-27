<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('photos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->text('image');
            $table->date('date_created');
            $table->string('status');
            $table->integer('album_id')->unsigned()->index();
            $table->foreign('album_id')->references('id')->on('albums');
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
        Schema::drop('photos');
	}

}
