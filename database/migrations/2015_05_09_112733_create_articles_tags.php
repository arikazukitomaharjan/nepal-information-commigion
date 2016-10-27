<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTags extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('articles_tag', function(Blueprint $table)
        {
            $table->integer('article_id')->unsigned()->index()->nullable();
            $table->foreign('article_id')->references('id')->on('articles');
            $table->integer('tag_id')->unsigned()->index()->nullable();
            $table->foreign('tag_id')->references('id')->on('tags');
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
		Schema::drop('articles_tag');
	}

}
